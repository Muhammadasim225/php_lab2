<?php  
include "db.php";
if(isset($_GET['Sr_no'])){
$Sr_no=$_GET['Sr_no'];
$sql="DELETE FROM `product` WHERE `Sr_no` = '$Sr_no'";
$res=mysqli_query($conn,$sql);
if($res){
    echo "Successfully deleted!!!!!";
    header("Location: view1.php");
    echo "<br>";
}
else{
    echo "ERROR IN DELETING";
    echo "<br>";
}
}
?>
