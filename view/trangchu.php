<?php
 session_start();
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
    <link href="css/trangchu.css" rel="stylesheet">
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
            <h1>THE OMEGA</h1>
            <p>Đặt mình khác biệt với thế giới và ghi dấu ấn của bạn với một kiệt tác hình ảnh độc đáo,<br> 
                tuyệt đẹp.THE OMEGA là minh chứng cổ điển cho tay nghề thủ công <br>
                đặc biệt</p>

            <a href="hienthi.php">TẠO DẤU ẤN CỦA BẠN</a>
        </div>

    </div>

    <div id="content">
        <div class="contenttext">
            <h2>THE OMEGA COLLECTION</h2>

            <span>Chú ý đến chi tiết luôn là một tính năng tốt. Chúng tôi không thể nghĩ ra món quà nào tuyệt vời hơn cho ngày kỷ niệm 5 năm thành lập của chúng tôi ngoài một cặp đồng hồ độc quyền từ bộ sưu tập OMEGA.
                 Mỗi khi nhìn đồng hồ, tôi lại nghĩ đến cô ấy và cảm thấy cô ấy nghĩ về tôi.</span>
        </div>

        <div class="collection">
            <div class="collectiontext">
                <h2>The Lawson Collection</h2>
               
                <span>
                
               Whether you’re about to invest in your first serious watch or looking to add to an already <br>
               impressive collection, the right luxury watch acts as a milestone in life: a marker of time well <br> 
               spent. If you’re struggling to choose the perfect timepiece then allow us to help. Here are the  <br>
               classics we suggest investing in.
                </span>
            </div>
        </div>


        <div class="collectwatch">
            <div class="form">
                <span>TUYỆT TÁC CỦA THỜI GIAN</span>
                 <h2>Heritage 1959</h2>
                 <p>Làm phong phú tủ quần áo của bạn với một 
                     chiếc đồng hồ kết hợp giữa khái niệm cổ <br>
                     điển vượt thời gian với nét sang trọng <br>
                     hiện đại đầy khám phá.Được thiết kế với <br>
                      tâm trí củanhững năm 50 - Heritage <br>
                       1959 là một sự tôn vinh thực  <br>
                       sự cho tinh thần của "Thời kỳ vàng" <br>
                        lấy theo tông màu của chủ nghĩa bành<br>
                         trướng và thịnh vượng tài chính. 
                
                    <br> <br>
                    
                    Heritage 1959 có họa tiết hình tròn đồng <br>
                    tâm kết hợp mặt đồng hồ màu trắng tối giản <br>
                     và các chỉ số vàng hồng chạm nổi, được <br>
                      đóng dấu "A" thương hiệu của chúng tôi,  <br>
                      được bao phủ bởi kính tinh thể sapphire <br>
                      chính hãng.
                </p>
            </div>

            <div class="formpic">
                <img src="images/contentpicwatch.png">
        
                <h2>HERITAGE 1959</h2>
                <i>The ultimate business watch.</i>
                <a href="hienthi.php">MUA NGAY</a>
            </div>

            <div class="formpic">
                <img src="images/contentpicwatch2.png">
                <h2>HERITAGE 1959</h2>
                <i>A luxurious modern masterpiece..</i>
                <a href="hienthi.php">MUA NGAY</a>
            </div>
        </div>

        <div class="footcontent">
            <div class="picture">
                <img src="images/Screenshot (1677).png">
            </div>

            <div class="text">
                <h2>Thiết Kế Cho Những Kẻ Thách Thức Giới Hạn</h2>

                <span>Chú ý đến chi tiết luôn là một tính năng tốt. Chúng tôi không thể nghĩ ra món quà nào tuyệt vời hơn cho ngày kỷ niệm 5 năm thành lập của chúng tôi ngoài một cặp đồng hồ độc quyền từ bộ sưu tập Lawson. Mỗi khi nhìn đồng hồ, tôi lại nghĩ đến cô ấy và cảm thấy cô ấy nghĩ về tôi.</span>

                <a href="gioithieu.php">READ OUR STORY</a>
            </div>

        </div>



    </div>

    <!-------------------------------------------------->
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
</html>