<?php
session_start();
?>

<?php
 if (isset($_SESSION['matk'])) {
?>
                    
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liên Hệ | OMEGA</title>
    <link href="css/lienhe.css" rel="stylesheet">
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
    //khởi chạy phiên từ trang xử lý
    $matk = $_SESSION['matk'];
    //echo $matk;
    include 'connect.php';


    $result = mysqli_query($db, "SELECT * FROM `taikhoan` WHERE `matk` = $matk");
    $row = mysqli_fetch_assoc($result);

    ?>

    <div id="content">
        <h2>Xin chào: <?php echo $row['hoten'] ?> </h2>


        <div class="frmPhanhoi" >
            <form method="POST" role="form" name="lienhe">
                <textarea cols="80" rows="12" name="txtvande" placeholder="Vui lòng gửi phản hồi của bạn tại đây"></textarea>
                <button class="button2" type="submit" value="Submit" name="sbt">Gửi phản hồi</button>
            </form>
        </div>


    </div>
    <!------------------------------------------------------->
    <!--xử lý submit liên hệ ---->

    <?php
    
    if (isset($_POST["sbt"]))  //kiểm tra có tồn tại biến ko -> nếu có rồi thì nó báo sai
    {

        mysqli_set_charset($db, "utf8");
        $insert_id = $db->insert_id;
        //$h1 = $_POST["mact"];
        $h2 = $matk;
        $h3 = $_POST["txtvande"];

        if ($h2 == "" || $h3 == "" ) {
            echo '<script language="javascript">alert("Vui Lòng Nhập Đầy Đủ Thông Tin!"); window.location="lienhe.php";</script>';
        } else 
        {
            $sql = "insert into lienhe values ('$insert_id', '$h2','$h3')";
            $result = mysqli_query($db, $sql);
            echo '<script language="javascript">alert("Gửi thông tin thành công!"); window.location="lienhe.php";</script>';
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

   
<?php
    }
    else
    echo '<script language="javascript">alert("Vui Lòng Đăng Nhập"); window.location="dangnhap.php";</script>';

?>