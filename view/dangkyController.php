<?php

    $db = mysqli_connect("localhost" , "root", "" , "quanlidongho")  or die ('Lỗi kết nối'); 
    mysqli_query($db,"SET NAMES 'UTF8'");
 
    //lấy dữ liệu từ form gọi lên
    $tk = $_POST['taikhoan'];
    $ht = $_POST['ht'];
    $gt = $_POST['gt'];
    $email = $_POST['email'];
    $mk2 = $_POST['mk2'];
    $mk1 = $_POST['mk1'];
    $diachi = $_POST['diachi'];
    $SDT = $_POST['SDT'];


   
    //kết nối đến CSDL
  

    // Dùng isset để kiểm tra Form -> cái này tìm hiểu sau
    if ($tk == "" || $ht == "" || $gt == "" || $email == "" || $mk2 == "" || $mk1 == "" || $diachi == "" || $SDT == "") 
    {
        echo '<script language="javascript">alert("Vui Lòng Nhập Đầy Đủ Thông Tin!"); window.location="dangky.php";</script>';
    }
    else if (is_numeric($tk) || is_numeric($ht) || is_numeric($gt) ||is_numeric($diachi) ||is_numeric($SDT))
    {
        echo '<script language="javascript">alert("Vui Lòng Nhập đúng trường dữ liệu!"); window.location="dangky.php";</script>';
    }
    else if (!isset($_POST['st']) )
    {
        echo '<script language="javascript">alert("Vui Lòng Chấp Nhận điều khoản sử dụng!"); window.location="dangky.php";</script>';
    } 
    else 
    {
       echo "bạn đã nhập đầy đủ thông tin";
       //thực hiện việc lưu trữ dữ liệu vào db
       // Kiểm tra username hoặc email có bị trùng hay không
      $sql = "SELECT * FROM taikhoan WHERE username = '$tk' OR email = '$email'";

       //thực thi câu truy vấn
       $check = mysqli_query($db, $sql);


       // Nếu kết quả trả về lớn hơn 1 thì nghĩa là username hoặc email đã tồn tại trong CSDL
        if (mysqli_num_rows($check) > 0) 
        {
           echo '<script language="javascript">alert("Tài khoản đã tồn tại!"); window.location="dangky.php";</script>';

           die();  //dừng chương trình
        } 
        else  //nhập dữ liệu vào CSDL
        {

           $insert_id = $db->insert_id; //su dung id cua database auto increment
           $sql =  "INSERT INTO `taikhoan`(`matk`, `username`, `password`, `email`, `hoten`, `diachi`, `gioitinh`,`SDT`,`usertype`) 
           VALUES ('$insert_id','$tk','$mk1','$email','$ht', '$diachi' ,'$gt','$SDT','user')";
           $result = mysqli_query($db, $sql);
           echo '<script language="javascript">alert("Đăng ký thành công!"); window.location="trangchu.php";</script>';
       }
    }

   

?>
