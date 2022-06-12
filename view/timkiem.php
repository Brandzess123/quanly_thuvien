<?php
 session_start();
 ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>hiển thị</title>
    <link href="css/hienthi.css" rel="stylesheet">
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
        <!--------------------------------------------------->

        <div id="content" >

            <div class="timkiem">
                <form action="searchController.php" method="POST" action="timkiem.php" role="form" name="timkiem">
                    <table>
                        <tr>
                            <td><input type="text" name="tukhoa" placeholder="Nhập tên đồng hồ"></td>
                            <button class="button2" type="submit" value="Submit">Tìm Kiếm</button>
                        </tr>
                    </table>
                </form>
            </div>


            <!-------------------------------------------------->
            
            <?php
            $db = mysqli_connect("localhost", "root", "", "quanlidongho")  or die('Lỗi kết nối');
            mysqli_query($db, "SET NAMES 'UTF8'");


            //lấy dữ liệu từ form gọi lên
            $tukhoa = $_POST['tukhoa'];
            $sql =  "SELECT * FROM dongho WHERE tendh LIKE'%$tukhoa%'  ";
            $result = mysqli_query($db, $sql);

            ?>
            <div class="text">
                <h2>Kết quả tìm kiếm: </h2> 
            </div>

            <?php


            while ($row = mysqli_fetch_array($result)) {

            ?>

                <div class="wcollection">
                    <div class="infwatch">
                        <a href="detail.php?id= <?= $row['madh'] ?>"><img src="images/<?php echo $row["picture"] ?>"></a>
                        <!--echo row picture -> lay anh tu csdl-->
                        <h2><?php echo $row["tendh"] ?></h2>
                        <!--echo row picture -> lay ten tu csdl-->
                        <p>giá: <?php echo $row["gia"]."$" ?> </p>
                        <!--echo row picture -> lay gia tu csdl-->
                        <p>mã đồng hồ: <?php echo $row["madh"] ?> </p>  <!--echo row picture -> lay madh tu csdl-->
                    </div>
                </div>

            <?php
            }
            ?>

        </div>



        <!-------------------------------------------------->
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