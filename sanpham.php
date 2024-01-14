<?php
include"ketnoi1.php";
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
    <form action="sanpham.php" method="POST" enctype="multipart/form-data">
            <table style=" width:600px; margin-left:100px;"border="1">
            <tr>
                <td>Product name</td>
                <td>
                    <input style=" width:400px;"  type="text" name="name"/>
                </td>
             
            </tr> 
            <tr>
                <td>Product quantity</td>
                <td>
                    <input style=" width:400px; "type="text" name="quantity"/>
                </td>
             
            </tr> 
            <tr>
                <td>Product description</td>
                <td>
                    <input style=" height:200px; width:400px;" type="text" name="description"/>
                </td>
             
            </tr> 
            <tr>
                <td>Product img</td>
                 
                <td><input type="file" name="image"> </td>

            </tr> 
            <tr>
                <td></td>
                <td><button type="submit" name="submit">upload</button></td>

            </tr>

            </table>
            <?php include 'product-handling.php'?>
        </form>

    </div>


</body>

<footer>

    </footer>

    
</html>