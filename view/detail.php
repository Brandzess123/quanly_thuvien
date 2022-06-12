<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi tiết sản phẩm |</title>
    <link href="css/detail.css" rel="stylesheet">
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

    <!------------------------------------------------
    <?php

    $db = mysqli_connect("localhost", "root", "", "quanlidongho")  or die('Lỗi kết nối');
    mysqli_query($db, "SET NAMES 'UTF8'");

    if (mysqli_connect_errno()) {
        echo "Connection Fail: " . mysqli_connect_errno();
        exit;
    }

    //$result = mysqli_query($con, "SELECT * FROM `product` WHERE `id` = ".$_GET['id']);

    //$product = mysqli_fetch_assoc($result);



    $result = mysqli_query($db, "SELECT * FROM `dongho` WHERE `madh` = " . $_GET['id']);

    $product = mysqli_fetch_assoc($result);


    ?>
    ----------->


    <div id="content">

        <div class="split">
            <div class="anh">
                <img src="images/<?= $product['picture'] ?>" />
            </div>

            <div class="txtsplit">

                <h2>Bộ sưu tập: "<?= $product['collection'] ?>"</h2>

                <h3>Tên đồng hồ: "<?= $product['tendh'] ?>"</h3>

                <h3>Số lượng: "<?= $product['soluong'] ?>"</h3>

                <h3>mô tả: "<?= $product['mota'] ?>"</h3>

                <h3>Giá niêm yết: "<?= $product['gia'] ?>" $</h3>

                <form method="post" name="frmthem">
                    <button class="button2" type="submit" value="Submit" name="sbt">Thêm vào giỏ hàng</button>
                </form>


            </div>
        </div>


    </div>

    <!------------------------------------------------XỬ LÝ DETAIL----------------------------------------------->
    <?php
    //khởi chạy phiên từ trang xử lý đăng nhập
   

   
    if (isset($_POST["sbt"]))  //khi bấm vào submit là chạy
    {
        if (isset($_SESSION["matk"])) {
            $matk = $_SESSION['matk'];
            echo $matk;
            //khởi tạo database

            //chạy lệnh
            $madh = $product['madh'];
            $gia = $product['gia'];


            //kiểm tra hàng đã có chưa -> nếu có thì tăng sl lên 1
            $sql = "SELECT * FROM `giohang`  WHERE `matk` = '$matk' AND `madh` = '$madh'";
            $check = mysqli_query($db,
                $sql
            );


            if (mysqli_num_rows($check) > 0
            ) {
                $sql = "UPDATE `giohang` SET `sl`=`sl` + 1 WHERE `matk` = '$matk' AND `madh` = '$madh'";
                $result = mysqli_query($db, $sql);
            } else {
                $insert_id = $db->insert_id; //su dung id cua database auto increment
                $sql = "INSERT INTO `giohang`(`magh`, `matk`, `madh`, `sl`, `gia`) VALUES ('$insert_id','$matk','$madh',1,'$gia')";
                $result = mysqli_query($db, $sql);

                echo '<script language="javascript">alert("Thêm thành công!"); window.location="giohang.php";</script>';
            }
        }
        else
        {
            echo '<script language="javascript">alert("Vui lòng đăng nhập!"); window.location="dangnhap.php";</script>';
        }
    

        
    }
    ?>

    <!------------------------------------------------------->

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