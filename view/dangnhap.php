<?php
 session_start();
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng Nhập</title>
    <link href="css/dangnhap.css" rel="stylesheet">
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

    <!----------------------------------------------------------->
    <div id = "content">
        <div class="text">
            <h1>ĐĂNG NHẬP</h1>

        </div>

        <div class="split">
            <div class="dangnhap">
                <h2>TÔI CÓ TÀI KHOẢN</h2>
                <span>yêu cầu bắt buộc*</span>
                 
                 <form action="dangnhapController.php" action="dangnhapController.php" method="POST" role="form" name = "dn" >
                    <input type="text" name="taikhoan" size="30" placeholder=" Tài khoản*" id="">   
                    <input type="password" name="matkhau" size="30" placeholder=" Mật khẩu*" id=""> 
                 


                    <a link href="lienhe.html"> Quên mật khẩu?</a>
                <button class="button2" type="submit" value="Submit" >Đăng Nhập</button>
                </form>
                
            </div>
    
            <div class="dangky">
                <h2>TÔI KHÔNG CÓ TÀI KHOẢN</h2>
                <p>Tạo tài khoản để hưởng lợi từ các dịch vụ độc quyền của chúng tôi và cập nhật các ấn phẩm mới nhất của chúng tôi.</p>
                <form action="dangky.php" method="POST" role="form" name = "dky" >
                    <button class="button2"  type="submit" value="Submit">Đăng Ký</button>
                </form>

                
               
            </div>
        </div>
    </div>


    <!------------------------------------------------------->

    <div id="footer">
        <div class="ft">
         <span >
             Họ tên:Đặng Minh Hiếu <br>
             MSV: 19103100078 <br>
             Trường: ĐHKT-KT CÔNG NGIỆP<br>
 
 
         </span>
        </div>
     </div>
</body>
