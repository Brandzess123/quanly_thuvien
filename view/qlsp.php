<?php
session_start();

if ($_SESSION['usertype'] == "admin") 
{
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>quản lý tài khoản</title>
    <link href="ql.css" rel="stylesheet">
</head>

<body>
<div id="header">
        <div class="topheader">
            <div class="logo">
                <a href="trangchu.html">OMEGA</a>

            </div>

            <div class="list">
                <ul>
                    <li><a href="gioithieu.php">Giới thiệu</a></li>
                    <li><a href="trangchu.php">Trang Chủ</a></li>
                    <li><a href="hienthi.php">Hiển Thị</a></li>
                    <li><a href="lienhe.php">Liên Hệ</a></li>
                <?php
                    if (isset($_SESSION['matk'])) 
                    {
                ?>
                    <li><a href="giohang.php">Giỏ Hàng</a></li>
                <?php
                    }
                    include "header.php";
                ?>
                
                    
                    <li><a href="dangnhap.php">Tài khoản</a></li>
                     
                </ul>
            </div>
        </div>

    </div>
    
    <!------------------------------------------------------->
    <?php
    //khởi chạy phiên từ trang xử lý đăng nhập
    //$matk = $_SESSION['matk'];
    //echo $matk;
    include 'connect.php';


    $result = mysqli_query($db, "SELECT * FROM `dongho`");
    $product = mysqli_fetch_assoc($result);
    ?>

    <?php

    $search = isset($_GET['name']) ? $_GET['name'] : "";
    //if ($search) {
    //    $where = "WHERE `name` LIKE '%" . $search . "%'";
    //}

    if ($search) {
        $products = mysqli_query($db, "SELECT * FROM `dongho` WHERE `tendh` LIKE '%" . $search . "%' ORDER BY `madh` ");
        // $totalRecords = mysqli_query($db, "SELECT * FROM `docgia` WHERE `hotendg` LIKE '%" . $search . "%'");
    } else {
        $products = mysqli_query($db, "SELECT * FROM `dongho` ORDER BY `madh` ");
        //$totalRecords = mysqli_query($db, "SELECT * FROM `docgia`");
    }
    ?>




    <?php
    if (isset($_GET['action'])) {

        switch ($_GET['action']) {  //BÊN NÀY NÓ NHẬN ACTION


            case "delete":    //TRƯỜNG HỢP NÓ NHẬN CASE DELETE

                if (isset($_GET['id'])) {              //

                    $delete = mysqli_query($db, "DELETE FROM `dongho` WHERE `madh` = " . $_GET['id']); //xóa sản phẩm 
                }
                header('Location: ./qlsp.php'); //reset lại trang
                break;
        }
    }

    ?>
    <!-------------------------------------------------------------->
     
    



    <div id="content">
        <div class="text">
            <h2>QUẢN LÝ SẢN PHẨM</h2>



        </div>

        <div class="timkiem">
            <form method="GET" role="form" name="timkiem">
                <table>
                    <tr>
                        <td><input type="text" value="<?= isset($_GET['name']) ? $_GET['name'] : "" ?>" name="name" /></td>
                        <td><input type="submit" value="Tìm kiếm" /></td>
                    </tr>
                </table>
            </form>
        </div>

        <div class="product">
            <form id="cart-form" action="qltk.php?action=submit" method="POST">
                <div class="giohang">
                    <table>
                        <tr style="font-weight: bold">

                            <td>MÃ ĐỒNG HỒ</td>
                            <td>TÊN ĐỒNG HỒ</td>
                            <td>COLLECTION</td>
                            <td>ẢNH</td>
                            <td>SỐ LƯỢNG</td>
                            <td>MÔ TẢ</td>
                            <td>GIÁ</td>
                            <td>XÓA</td>
                            <td>SỬA</td>
                            
        
                               
                           
                        </tr>

                        <?php


                        while ($row = mysqli_fetch_array($products)) {

                        ?>

                            <tr>
                                <td><?php echo $row["madh"] ?></td>
                                <td><?php echo $row["tendh"] ?></td>
                                <td><?php echo $row["collection"] ?></td>
                                <td><img src= "images/<?php echo $row["picture"] ?>"></td>
                                <td><?php echo $row["soluong"] ?></td>
                                <td><?php echo $row["mota"] ?></td>
                                <td><?php echo $row["gia"] ?></td>
                               
                            
                                <td><a href="qlsp.php?action=delete&id=<?= $row['madh'] ?>">Xóa</a></td>
                                <td><a href="suaspController.php?action=delete&id=<?= $row['madh'] ?>">Sửa</a></td>
                                


                            </tr>

                        <?php
                        }
                        ?>

                    </table>
                </div>
            </form>


            
            <div class="btn" >
               <a href="themspController.php" >thêm mới</a> <!--chỗ này-->
            </div>
         


        </div>
    </div>


    <div id="footer">
        <div class="ft">
            <span>
                Họ tên:Đặng Minh Hiếu <br>
                MSV: 19103100078 <br>
                Trường: ĐHKT-KT CÔNG NGIỆP<br>


            </span>
        </div>
    </div>

</body>

</html>

<?php
}
else
echo '<script language="javascript">alert("Vui Lòng Đăng Nhập!"); window.location="dangnhap.php";</script>';
?>