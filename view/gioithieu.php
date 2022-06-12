<?php
 session_start();
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>giới thiệu</title>
    <link href="css/gioiithieu.css" rel="stylesheet">
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


          <div class="headertext">
            <h1>SAVOIR-FAIRE</h1>
            <p>CẢM ỨNG CON NGƯỜI: KỸ NĂNG CÓ THỂ THAY THẾ ĐƯỢC KHI HOÀN THIỆN BẰNG TAY <br>
                đặc biệt</p>
            <span>Viên ngọc trên vương miện của một chiếc đồng hồ OMEGA chính là từ vỏ và mặt số cho đến trái tim đang đập của nó,  đều được hoàn thiện bằng tay  <br>
              bởi một chuyên gia tận tâm, được đào tạo, với các kỹ năng được truyền qua nhiều <br> 
                thế hệ.</span>

        </div>


       </div>
    </div>

    <div id="content">
        <div class="text">
            <h2>Nguồn gốc </h2>
            <p>Được thành lập vào năm 1839, OMEGA là nhà sản xuất đồng hồ Genevan độc lập, thuộc sở hữu gia đình cuối cùng. Với lịch sử hoạt động<br>
             sôi nổi, không bị gián đoạn kéo dài gần 180 năm, công ty được hưởng lợi từ di sản độc đáo của truyền thống  <br>
             và sự đổi mới.
             <br><br>
             Từ cuộc gặp gỡ giữa Antoine Norbert de Patek với Jean Adrien Philippe đến nhiệm kỳ tổng thống của Thierry Stern, từ những chiếc <br>
             đồng hồ bỏ túi đầu tiên đến những siêu máy tính mới nhất - khám phá những sự kiện quan trọng tạo nên lịch <br>
             sử của OMEGA và toàn bộ ngành sản xuất đồng hồ.</p>

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