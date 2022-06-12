<?php
        if (isset($_POST["sbt"]))  //khi bấm vào submit là chạy
        {
            include 'connect.php';

            //$db = mysqli_connect("localhost", "root", "", "qltv")  or die('Lỗi kết nối');
            mysqli_query($db, "SET NAMES 'UTF8'");

            //lấy dữ liệu từ form gọi lên
            //$matk = $_POST['matk '];  //cái này lấy từ database -> loinhuan .... //cái còn lại là biến $ln
            $tendh = $_POST['tendh'];  //cái này lấy từ database -> loinhuan .... //cái còn lại là biến $ln
            $collection = $_POST['collection'];
            $sl = $_POST['soluong'];
            $mota =  $_POST['mota'];
            $gia =  $_POST['gia'];
            //$pic =  $_POST['picture'];
            //$anh = ".jpg";
            $img_upload ="test";

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
                        echo '<script language="javascript">alert("Vui lòng nhập đúng file ảnh!"); window.location="qlsp.php";</script>';
                    }
        
                    // }
                }
            }
            else 
            {
                echo '<script language="javascript">alert("Vui lòng nhập file ảnh!");window.location="qlsp.php";</script>';
                   
            }

            // Dùng isset để kiểm tra Form -> cái này tìm hiểu sau
                   // Dùng isset để kiểm tra Form -> cái này tìm hiểu sau
        if ($tendh == "" || $collection == "" || $sl == "" || $mota == "" || $gia == "" ) {                                                  
            echo '<script language="javascript">alert("Vui Lòng Nhập Đầy Đủ Thông Tin!"); window.location="qlsp.php";</script>';
            //header("Refresh:0");
        }
        else if (!is_numeric($sl) || !is_numeric($gia) || is_numeric($tendh) || is_numeric($collection) || is_numeric($mota))
        {
            echo '<script language="javascript">alert("Vui Lòng Nhập Đúng Trường Dữ Liệu!");window.location="qlsp.php"; </script>';
            //header("Refresh:0");

        } 
        else {
          
            
            
            //thực hiện việc lưu trữ dữ liệu vào db
            $sqltt = "UPDATE `dongho` SET  tendh = '$tendh',collection = '$collection',soluong = '$sl',mota = '$mota',gia = '$gia',picture = ' $img_upload' WHERE `madh`='$madh' ";
            $result = mysqli_query($db, $sqltt);
            echo '<script language="javascript">alert("Thêm thành công!"); window.location="qlsp.php";</script>';
        }

          }
        ?>