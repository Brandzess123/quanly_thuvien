<?php

if (isset($_POST["submit"]))  //khi bấm vào submit là chạy
{
    include 'connect.php';

   //$db = mysqli_connect("localhost", "root", "", "qltv")  or die('Lỗi kết nối');
    mysqli_query($db, "SET NAMES 'UTF8'");

    //lấy dữ liệu từ form gọi lên
    $tendh = $_POST['tendh'];  //cái này lấy từ database -> loinhuan .... //cái còn lại là biến $ln
    $collection = $_POST['collection'];
    $sl = $_POST['soluong'];
    $mota =  $_POST['mota'];
    $gia =  $_POST['gia'];
    $pic =  $_POST['picture'];
   $anh = ".jpg";

    
    

    //kết nối đến CSDL


    // Dùng isset để kiểm tra Form -> cái này tìm hiểu sau
    if ($tendh == "" || $collection == "" || $sl == "" || $mota == "" || $gia == "" || $pic == "") {                                                  
        echo '<script language="javascript">alert("Vui Lòng Nhập Đầy Đủ Thông Tin!"); </script>';
        header("Refresh:0");
    }
    else if (!is_numeric($sl) || !is_numeric($gia))
    {
        echo '<script language="javascript">alert("Vui Lòng Nhập Đúng Trường Dữ Liệu!"); </script>';
        header("Refresh:0");

    } 
    else if (strlen(strstr($pic, $anh)) <= 0) {
        echo '<script language="javascript">alert("Vui lòng nhập đúng đường dẫn ảnh!"); ';
        header("Refresh:0");
    }
    else {
        echo "bạn đã nhập đầy đủ thông tin";
        //thực hiện việc lưu trữ dữ liệu vào db
    }

    // Kiểm tra username hoặc email có bị trùng hay không
    $sql = "SELECT * FROM 'dongho' WHERE `tendh` = '$tendh'";

    //thực thi câu truy vấn
    $check = mysqli_query($db, $sql);


    // Nếu kết quả trả về lớn hơn 1 thì nghĩa là username hoặc email đã tồn tại trong CSDL
    if (mysqli_num_rows($check) > 0) {
        echo '<script language="javascript">alert("sản phẩm đã tồn tại!"); </script>';
        header("Refresh:0");

        die();  //dừng chương trình
    } else  //nhập dữ liệu vào CSDL
    {

        $insert_id = $db->insert_id; //su dung id cua database auto increment
        $sql =  "INSERT INTO `dongho` VALUES ('$insert_id','$tendh','$collection','$sl','$mota','$gia','$pic')";
        $result = mysqli_query(
            $db,
            $sql
        );
        echo '<script language="javascript">alert("Thêm thành công!"); window.location="qlsp.php";</script>';
    }
}



?>
