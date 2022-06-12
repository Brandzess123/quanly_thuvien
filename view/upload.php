<?php

if (isset($_POST["submit"]) )  //khi bấm vào submit là chạy
{
    error_reporting(0);
    ini_set('display_errors', 0);
    include 'connect.php';

    //$insert_id = $db->insert_id; //su dung id cua database auto increment
   //$db = mysqli_connect("localhost", "root", "", "qltv")  or die('Lỗi kết nối');
    mysqli_query($db, "SET NAMES 'UTF8'");

    //lấy dữ liệu từ form gọi lên
    $tendh = $_POST['tendh'];  //cái này lấy từ database -> loinhuan .... //cái còn lại là biến $ln
    $collection = $_POST['collection'];
    $sl = $_POST['soluong'];
    $mota =  $_POST['mota'];
    $gia =  $_POST['gia'];
    $img_upload = "tesst";
    //$pic =  $_POST['picture'];
    //$anh = ".jpg";

    //------------------------------------------------------/
    if (isset($_FILES['my_image'])) {
        echo "<pre>";
        print_r($_FILES['my_image']);
        echo "</pre>";

        $img_name = $_FILES['my_image']['name']; //lấy dữ liệu từ hàm array
        $img_size = $_FILES['my_image']['size'];
        $tmp_name = $_FILES['my_image']['tmp_name'];
        $error = $_FILES['my_image']['error'];
       
        if ($error == 0) {

            $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
            $img_ex_lc = strtolower($img_ex);
            
            echo ($img_ex);
            $allowed_exs = array("jpg", "jpeg", "png");
            if (in_array($img_ex_lc, $allowed_exs)) {
                $new_img_name = uniqid("IMG-", true) . '.' . $img_ex_lc;
                $img_upload_path = 'images /' . $new_img_name;
                $img_upload =  $new_img_name;
                move_uploaded_file($tmp_name, $img_upload_path);
            } else {
                echo '<script language="javascript">alert("Vui lòng nhập đúng file ảnh!"); window.location="themspController.php";</script>';
                die();
            }

            // }
        }
    }
    else 
    {
        echo '<script language="javascript">alert("Vui lòng nhập file ảnh!"); window.location="themspController.php";</script>';
           
    }
   
    
   //------------------------------------------------------/
    //kết nối đến CSDL


    // Dùng isset để kiểm tra Form -> cái này tìm hiểu sau
    if ($tendh == "" || $collection == "" || $sl == "" || $mota == "" || $gia == "" ) {                                                  
        echo '<script language="javascript">alert("Vui Lòng Nhập Đầy Đủ Thông Tin!");window.location="themspControlller.php"; </script>';
      
        //header("Refresh:0");
    }
    else if (!is_numeric($sl) || !is_numeric($gia) || is_numeric($tendh) || is_numeric($collection) ||  is_numeric($mota))
    {
        echo '<script language="javascript">alert("Vui Lòng Nhập Đúng Trường Dữ Liệu!");window.location="themspControlller.php"; </script>';
        //header("Refresh:0");

    } 
   
    else {
        echo "bạn đã nhập đầy đủ thông tin";
        //thực hiện việc lưu trữ dữ liệu vào db
    }

    // Kiểm tra username hoặc email có bị trùng hay không
    $sql = "SELECT * FROM `dongho` WHERE tendh = '$tendh';";
    $img = $img_upload;
    //thực thi câu truy vấn
    $check = mysqli_query($db, $sql);

    // Nếu kết quả trả về lớn hơn 1 thì nghĩa là username hoặc email đã tồn tại trong CSDL
    if (mysqli_num_rows($check) > 0) {
        echo '<script language="javascript">alert("sản phẩm đã tồn tại!");window.location = "./themspController.php ?action=them";
        </script>';

        die(); //dừng chương trình
    } 

    else  //nhập dữ liệu vào CSDL
    {

        
        $sql =  "INSERT INTO `dongho` VALUES (NULL,'$tendh','$collection','$sl','$mota','$gia','$img')";
        $result = mysqli_query($db,$sql);
        echo $img;

        /*if (!$sql)
        {
            echo mysqli_error($db);
            die();
        }
        else
        {
            echo "success";
        }*/
        echo '<script language="javascript">alert("Thêm thành công!"); window.location="qlsp.php";</script>';
    }
}
else {
    echo '<script language="javascript">alert("Vui Lòng Nhập Đầy Đủ Thông Tin!");window.location="themspController.php";  </script>';
 
}



?>
