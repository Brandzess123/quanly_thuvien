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
        $matk = $_GET['id'];

        $result = mysqli_query($db, "SELECT * FROM `taikhoan` WHERE matk = '$matk' ");
        //$nameuser = mysqli_fetch_row ( $sqltest );

        if (!isset($matk)) {
            echo '<script language="javascript">alert("Vui lòng đăng nhập!"); window.location="dangnhap.php";</script>';
        }

        while ($row = mysqli_fetch_array($result)) {

        ?>
            <!------------------------------------------------------->
            <div id="content">
                <h2>Sửa Tài khoản</h2>

                <div class="formdky">

                    <form method="POST" role="form" name="dky">
                        <table>

                            <tr>
                                <td>
                                    <span>username</span>
                                </td>
                            </tr>

                            <tr>
                                <td><input type="text" name="username" size="20" id="" value="<?php echo $row["username"] ?>"></td>
                            </tr>

                            <tr>
                                <td>
                                    <span>password</span>
                                </td>
                            </tr>

                            <tr>
                                <td><input type="text" name="password" size="20" id="" value="<?php echo $row["password"] ?>"></td>
                            </tr>

                            <tr>
                                <td>
                                    <span>email</span>
                                </td>
                            </tr>

                            <tr>
                                <td><input type="text" name="email" size="20" id="" value="<?php echo $row["email"] ?>"></td>
                            </tr>

                            <tr>
                                <td>
                                    <span>họ tên</span>
                                </td>
                            </tr>

                            <tr>
                                <td><input type="text" name="hoten" size="20" id="" value="<?php echo $row["hoten"] ?>"></td>
                            </tr>

                            <tr>
                                <td>
                                    <span>địa chỉ</span>
                                </td>
                            </tr>

                            <tr>
                                <td><input type="text" name="diachi" size="20" id="" value="<?php echo $row["diachi"] ?>"></td>
                            </tr>

                            <tr>
                                <td>
                                    <span>giới tính</span>
                                </td>
                            </tr>

                            <tr>
                                <td><select name="gioitinh" id="" style="width:100%;height:40px">

                                        <option value="nam">nam</option>
                                        <option value="nữ">nữ</option>

                                    </select></td>

                            </tr>


                            <tr>
                                <td>
                                    <span>SĐT</span>
                                </td>
                            </tr>

                            <tr>
                                <td><input type="text" name="SDT" size="20" id="" value="<?php echo $row["SDT"] ?>"></td>
                            </tr>

                            <tr>
                                <td>
                                    <span>usertype</span>
                                </td>
                            </tr>

                            <td>
                                <select name="usertype" id="" style="width:100%;height:40px">
                                    <option value="admin">admin</option>
                                    <option value="user">user</option>
                                </select>
                            </td>





                        </table>

                        <button class="button2" type="submit" value="Submit" name="sbt">Sửa tài khoản</button>
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
            $username = $_POST['username'];
            $password = $_POST['password'];

            $email = $_POST['email'];
            $hoten = $_POST['hoten'];
            $diachi = $_POST['diachi'];

            $gioitinh = $_POST['gioitinh'];
            $SDT = $_POST['SDT'];

            $usertype = $_POST['usertype'];

            $emailcheck = "@gmail.com";


            // Dùng isset để kiểm tra Form -> cái này tìm hiểu sau
            if ($matk  == "" || $username == "" ||  $password == "" ||  $email == "" || $hoten == "" ||   $diachi == ""  || $SDT == "") {
                echo '<script language="javascript">alert("Vui Lòng Nhập Đầy Đủ Thông Tin!"); </script>';
                //header("Refresh:0");
            } else if (!is_numeric($SDT) || is_numeric($username)  || is_numeric($diachi)) {
                echo '<script language="javascript">alert("Vui Lòng Nhập Đúng Định Dạng dữ liệu!"); </script>';
               // header("Refresh:0");
            } else if (strlen(strstr($email, $emailcheck)) <= 0) {
                echo '<script language="javascript">alert("Vui lòng nhập đúng gmail!"); ';
                //header("Refresh:0");
            } else {
                echo "bạn đã nhập đầy đủ thông tin";

                //thực hiện việc lưu trữ dữ liệu vào db
                $sqltt = "UPDATE `taikhoan` SET  `username`='$username',`password`='$password',`email`='$email',`hoten`='$hoten',`diachi`='$diachi',`gioitinh`='$gioitinh',`SDT`='$SDT',`usertype`='$usertype' WHERE `matk`='$matk' ";
                $result = mysqli_query($db, $sqltt);
                echo '<script language="javascript">alert("Thêm thành công!"); window.location="qltk.php";</script>';
            }




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