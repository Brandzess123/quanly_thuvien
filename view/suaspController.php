<?php
session_start();

if (isset($_SESSION['matk'])) {
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Thêm mới</title>
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
                        if (isset($_SESSION['matk'])) {
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
        //khởi chạy phiên từ trang xử lý đăng nhập
        include 'connect.php';
        $madh = $_GET['id'];

        $result = mysqli_query($db, "SELECT * FROM `dongho` WHERE madh = '$madh' ");
        //$nameuser = mysqli_fetch_row ( $sqltest );


        while ($row = mysqli_fetch_array($result)) {

        ?>
            <!------------------------------------------------------->
            <div id="content">
                <h2>Sửa Đồng Hồ</h2>

                <div class="formdky">

                <form  method="POST" role="form" name="dky" enctype="multipart/form-data">
                <table>
                    <tr>
                        <td>
                            <span>Tên đồng hồ</span>
                        </td>
                    </tr>

                    <tr>
                        <td><input type="text" name="tendh" size="20" id=""  value="<?php echo $row["tendh"] ?>"></td>
                    </tr>

                    <tr>
                        <td>
                            <span>Collection</span>
                        </td>
                    </tr>

                    <tr>
                        <td><input type="text" name="collection" size="20" id=""  value="<?php echo $row["collection"] ?>"></td>
                    </tr>

                    <tr>
                        <td>
                            <span>Số Lượng</span>
                        </td>
                    </tr>

                    <tr>
                        <td><input type="text" name="soluong" size="20" id=""  value="<?php echo $row["soluong"] ?>"></td>
                    </tr>

                    <tr>
                        <td>
                            <span>Mô tả</span>
                        </td>
                    </tr>

                    <tr>
                        <td><input type="text" name="mota" size="20" id=""  value="<?php echo $row["mota"] ?>"></td>
                    </tr>

                    <tr>
                        <td>
                            <span>Giá</span>
                        </td>
                    </tr>

                    <tr>
                        <td><input type="text" name="gia" size="20" id=""  value="<?php echo $row["gia"] ?>"></td>
                    </tr>

                    <tr>
                        <td>
                            <span>Ảnh sản phẩm</span>
                        </td>
                    </tr>

                    <tr>
                        <td> <input type="file" name="my_image" size="23" id="" style="height: 50px;"></td>
                        <!--<td><input type="text" name="picture" ></td>-->
                    </tr>

                </table>

                        <button class="button2" type="submit" value="Submit" name="sbt">Sửa Đồng Hồ</button>
                    </form>
                </div>
            </div>
            <!-------------------------------------------------------->
        <?php
        }
        ?>

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
               // print_r($_FILES['my_image']);
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
                        die();
                    }
        
                    // }
                }
            }
            else 
            {
                echo '<script language="javascript">alert("Vui lòng nhập file ảnh!");window.location="qlsp.php";</script>';
                
                die();
            }

            // Dùng isset để kiểm tra Form -> cái này tìm hiểu sau
                   // Dùng isset để kiểm tra Form -> cái này tìm hiểu sau
        if ($tendh == "" || $collection == "" || $sl == "" || $mota == "" || $gia == "" ) {                                                  
            echo '<script language="javascript">alert("Vui Lòng Nhập Đầy Đủ Thông Tin!"); </script>';
            //header("Refresh:0");
        }
        else if (!is_numeric($sl) || !is_numeric($gia) || is_numeric($tendh) || is_numeric($collection) || is_numeric($mota))
        {
            echo '<script language="javascript">alert("Vui Lòng Nhập Đúng Trường Dữ Liệu!"); </script>';
            //header("Refresh:0");

        } 

        // Kiểm tra username hoặc email có bị trùng hay không
        

        else {
            echo "bạn đã nhập đầy đủ thông tin";
            //thực hiện việc lưu trữ dữ liệu vào db
            //echo "bạn đã nhập đầy đủ thông tin";
            /*----------------------------------------------------------*/
            $sqltest = "SELECT picture FROM dongho WHERE `madh`='$madh' ";
            $resultc = mysqli_query($db, $sqltest);
            $data = mysqli_fetch_row($resultc);

            $deletefile =  $data["picture"];

            unlink("$deletefile");

            /*-----------------------------------------------------------*/
            //thực hiện việc lưu trữ dữ liệu vào db
            $sqltt = "UPDATE `dongho` SET  tendh = '$tendh',collection = '$collection',soluong = '$sl',mota = '$mota',gia = '$gia',picture = '$img_upload' WHERE `madh`='$madh' ";
            $result = mysqli_query($db, $sqltt);
            echo '<script language="javascript">alert("Thêm thành công!"); window.location="qlsp.php";</script>';
        }

        // Kiểm tra username hoặc email có bị trùng hay không
       
  


            //$sql =  "INSERT INTO `baocao`(`mabaocao`, `loinhuan`, `ngaylap`, `manv`) VALUES ('$insert_id','$ln','$date','$manv')";    
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
} else
    echo '<script language="javascript">alert("Vui Lòng Đăng Nhập!"); window.location="dangnhap.php";</script>';
?>