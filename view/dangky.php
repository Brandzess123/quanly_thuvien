<?php
 session_start();
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng Ký | OMEGA</title>
    <link href="css/dangky.css" rel="stylesheet">
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
     <div id= "content">
        <h2>ĐĂNG KÝ</h2>
       
        <div class="formdky">
             
            <form action="dangkyController.php" method="POST" role = "form" name="dky" >
                <table >
               

               <tr>
                   <td><input type="text" name="ht" size="20" placeholder="Họ Tên*"  id=""></td>
               </tr>

               <tr>
                   <td><input type="text" name="gt" size="20" placeholder="giới tính*" id=""></td>
               </tr>

               <tr>
                   <td><input type="text" name="email" size="20" placeholder="Email*s" id=""></td>
               </tr>

               <tr>
                   <td><input type="text" name="taikhoan" size="20" placeholder="Tài khoản*" id=""></td>
               </tr>

               <tr>
                   <td><input type="password" name="mk1" size="20" placeholder="Mật khẩu*" id=""></td>
               </tr>

               <tr>
                   <td><input type="password" name="mk2" size="20" placeholder="Xác nhận mật khẩu*" id=""></td>
               </tr>

               <tr>
                   <td><input type="text" name="diachi" size="20" placeholder="địa chỉ*" id=""></td>
               </tr>

               <tr>
                   <td><input type="text" name="SDT" size="20" placeholder="Số điện thoại*" id=""></td>
               </tr>
              </table>

              <div class="chk">
                  
                  <input type="checkbox" name="st">Chấp nhận Điều khoản Sử dụng * để tạo tài khoản My OMEGA
                  
              </div>

              <button class="button2" type="submit" value="Submit" >Đăng Ký</button>
           
        
        
          </form>
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
