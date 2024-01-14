<?php
include_once('ketnoi1.php');
if(isset($_REQUEST['id']) and $_REQUEST['id']!=""){
$id=$_GET['id'];
$sql = "DELETE FROM nhanvien WHERE id='$id'";
if ($conn->query($sql) === TRUE) {
    include"admin.php";
} else {
echo "Error updating record: " . $conn->error;
}

$conn->close();
}
?>