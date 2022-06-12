<?php
 session_start();
 ?>

<?php

    //$_SESSION['matk'] = "test";

    //lấy dữ liệu từ form gọi lên
    $u = $_POST['taikhoan'];
    $p = $_POST['matkhau'];

    //kết nối đến CSDL
    $db = mysqli_connect("localhost" , "root", "" , "quanlidongho");

    //truy vấn dữ liệu - tìm username và password có nhận được từ dữ liệu ko ?
    $sql = "select * from taikhoan where  username ='$u' and password = '$p' "; 

    //thực thi truy vấn
    $rs = mysqli_query($db,$sql);

    if ($u == "" || $p == "") 
    {
        echo '<script language="javascript">alert("Vui Lòng Nhập Đầy Đủ Thông Tin!"); window.location="dangnhap.php";</script>';
    }

    


 
    if (mysqli_num_rows($rs) > 0)
    {

        //-------------------------LƯU TÀI KHOẢN VÀ MẬT KHẨU VÀO SESSION (PHIÊN - BỘ NHỚ TẠM) --------------------------//
        //bắt đầu phiên
        while ($row = mysqli_fetch_array($rs))
        {
            $_SESSION['matk'] = $row['matk'];
            $_SESSION['usertype'] = $row['usertype'];
        }
        echo '<script language="javascript">alert("Đăng Nhập thành công!" ); window.location="trangchu.php";</script>';
    }
    else 
    {
        echo '<script language="javascript">alert("Tài khoản hoặc mật khẩu không đúng!"); window.location="dangnhap.php";</script>';
       
    }
?>
    

