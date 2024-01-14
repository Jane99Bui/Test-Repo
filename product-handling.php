<?php
include 'ketnoi1.php';
$name="";
$quantity="";
$description="";

if ( isset($_POST['name']) 
&& isset($_POST['quantity']) && isset($_POST['description']) && isset($_POST['submit'])) {
    $name = $_POST['name']; 
    $quantity = $_POST['quantity']; 
    $description = $_POST['description']; 
    $errors= array();
    $file_name = $_FILES['image']['name'];
    $target = "upload/".$file_name;
    //Code xử lý, insert dữ liệu vào table
    $sql = "INSERT INTO product (name,quantity,description,img)
    VALUES ('$name', '$quantity', '$description','$file_name')";

   $result= mysqli_query($conn, $sql);
    if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
        echo '<script language="javascript">alert("Đã upload thành công!");</script>';
        }else{
        echo '<script language="javascript">alert("Đã upload thất bại!");</script>';
        }
    }
  
  ?>