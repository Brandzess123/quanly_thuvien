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


    $result = mysqli_query($db, "SELECT * FROM `taikhoan`");
    $product = mysqli_fetch_assoc($result);
    ?>

    <?php

    $search = isset($_GET['name']) ? $_GET['name'] : "";
    //if ($search) {
    //    $where = "WHERE `name` LIKE '%" . $search . "%'";
    //}

    if ($search) {
        $products = mysqli_query($db, "SELECT * FROM `taikhoan` WHERE `username` LIKE '%" . $search . "%' ORDER BY `matk` ");
        // $totalRecords = mysqli_query($db, "SELECT * FROM `docgia` WHERE `hotendg` LIKE '%" . $search . "%'");
    } else {
        $products = mysqli_query($db, "SELECT * FROM `taikhoan` ORDER BY `matk` ");
        //$totalRecords = mysqli_query($db, "SELECT * FROM `docgia`");
    }
    ?>




    <?php
    if (isset($_GET['action'])) {

        switch ($_GET['action']) {  //BÊN NÀY NÓ NHẬN ACTION


            case "delete":    //TRƯỜNG HỢP NÓ NHẬN CASE DELETE

                if (isset($_GET['id'])) {              //

                    $delete = mysqli_query($db, "DELETE FROM `taikhoan` WHERE `matk` = " . $_GET['id']); //xóa sản phẩm 
                }
                header('Location: ./qltk.php'); //reset lại trang
                break;
        }
    }

    ?>
    <!-------------------------------------------------------------->
     
    



    <div id="content">
        <div class="text">
            <h2>QUẢN LÝ TÀI KHOẢN</h2>



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

                            <td>MÃ TÀI KHOẢN</td>
                            <td>USERNAME</td>
                            <td>PASSWORD</td>
                            <td>EMAIL</td>
                            <td>HỌ TÊN</td>
                            <td>ĐIA CHỈ</td>
                            <td>GIỚI TÍNH</td>
                            <td>SĐT</td>
                            <td>LOẠI NGƯỜI DÙNG</td>
                            <td>XÓA</td>
                            <td>SỬA</td>
        
                               
                           
                        </tr>

                        <?php


                        while ($row = mysqli_fetch_array($products)) {

                        ?>

                            <tr>
                                <td><?php echo $row["matk"] ?></td>
                                <td><?php echo $row["username"] ?></td>
                                <td><?php echo $row["password"] ?></td>
                                <td><?php echo $row["email"] ?></td>
                                <td><?php echo $row["hoten"] ?></td>
                                <td><?php echo $row["diachi"] ?></td>
                                <td><?php echo $row["gioitinh"] ?></td>
                                <td><?php echo $row["SDT"] ?></td>
                                <td><?php echo $row["usertype"] ?></td>
                            
                                <td><a href="qltk.php?action=delete&id=<?= $row['matk'] ?>">Xóa</a></td>
                                <td><a href="suatkController.php?action=delete&id=<?= $row['matk'] ?>">Sửa</a></td>
                                


                            </tr>

                        <?php
                        }
                        ?>

                    </table>
                </div>
            </form>


            
            <div class="btn" >
               <a href="themtkController.php" >thêm mới</a> <!--chỗ này-->
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