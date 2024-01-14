<?php
include"ketnoi1.php";
$id=$_GET['id'];
$query=mysqli_query($conn,"select * from `product` where id='$id'");
$row=mysqli_fetch_assoc($query);
?>

<html>
    <head>
        <link rel="stylesheet" type="text/css" href="style.css"/>
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>

</head>


<body>

    <div class="head">
        <div class="head-left"> 
             </div>
        <div class="head-right">
       <i class="fa fa-user"> trongbui</i>
        </div> 
       

    </div>
    <div class="Menu">
    <ul>

       <li><a href="#"><i class="fa fa-folder"></i> Quản Lý Đơn Hàng</a>
         <ul>
            <li><a>Tất Cả</a></li>
            <li><a>Đơn Hàng Mới</a></li>

         </ul>
    
      </li>
       <li><a href="#">Quản Lý Sản Phẩm</a>
       <ul>
            <li><a href="sanpham.php">Thêm Sản Phẩm Mới</a></li>
            <li><a href="all-product.php">Tất Cả Sản Phẩm</a></li>

         </ul></li>
       <li><a href="#">Quản Lý Khách Hàng</a>
       <ul>
            <li><a>Tất Cả Khách Hàng</a></li>
            <li><a>Thêm Khách Hàng Mới</a></li>

         </ul>
    </li>
    </ul>
    </div>
    <div class="content">
    <form method="POST" >
            <table style=" width:600px; margin-left:100px;"border="1">
            <tr>
                <td>Product name</td>
                <td>
                    <input style=" width:400px;"  value="<?php echo $row['name']; ?>" type="text" name="name"/>
                </td>
             
            </tr> 
            <tr>
                <td>Product quantity</td>
                <td>
                    <input style=" width:400px; " value="<?php echo $row['quantity']; ?>" type="text" name="quantity"/>
                </td>
             
            </tr> 
            <tr>
                <td>Product description</td>
                <td>
                    <input style=" height:200px; width:400px;" value="<?php echo $row['description']; ?>" type="text" name="description"/>
                </td>
             
            </tr> 
            <tr>
                <td>Product img</td>
                 
                <td><input type="file" name="image"> </td>

            </tr> 
            <tr>
                <td></td>
                <td><button type="submit" value="Update" name="update_user">upload</button></td>

            </tr>

            </table>
            <?php
               if (isset($_POST['update_user'])){
               $id=$_GET['id'];
               $name=$_POST['name'];
               $quantity=$_POST['quantity'];
               $description=$_POST['description'];
               $sql = "UPDATE `product` SET name='$name', quantity='$quantity', description='$description' WHERE id='$id'";

               if ($conn->query($sql) === TRUE) {
               echo "     Record updated successfully";
               } else {
               echo "Error updating record: " . $conn->error;
               }

               $conn->close();
               }
               ?>

        </form>

    </div>


</body>

<footer>

    </footer>

    
</html>