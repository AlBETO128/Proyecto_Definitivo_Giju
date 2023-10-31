<?Php
require "include/config.php"; // Database connection 
$id=$_GET['id'];
$todo=$_GET['todo'];
$elements=array("id"=>"$id","db_status"=>"","msg"=>"","records_affected"=>"");

/// Collect the file name of image /////
if($stmt = $connection->prepare("SELECT imagen FROM carrito  WHERE id=?")){
  $stmt->bind_param('i',$id);
  $stmt->execute();
   
   $result = $stmt->get_result();
   //echo "No of records : ".$result->num_rows."<br>";
   $row=$result->fetch_object();
   $file_name=$row->imagen;
}else{
  $elements['msg'].=$connection->error;
}
////Delete record from table ///
$query="DELETE FROM carrito WHERE id=?";
$stmt = $connection->prepare($query);
if ($stmt) {
$stmt->bind_param('i', $id);
$stmt->execute();
$elements['msg'].=" Record Deleted <br>";
$elements['records_affected']=$stmt->affected_rows;
}else{
$elements['msg'].=$connection->error;
}
/////


///
if($elements['records_affected']==1){
	if(@unlink("images/$file_name")) {$elements['msg'].=" File Deleted "; }
else{$elements['msg'].=" File Not Deleted ";}
}
/// Post back data /////

$elements['db_status']="True";
echo json_encode($elements);
?>