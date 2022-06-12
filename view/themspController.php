<?php
session_start();

if (isset($_SESSION['matk'])) 
{
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
    <div id="content">
        <h2>Thêm Sản phẩm mới</h2>

        <div class="formdky">

            <form action = "upload.php" method= "POST" role="form" name="dky"  enctype="multipart/form-data">
                <table>

                    

                    <tr>
                        <td>
                            <span>Tên đồng hồ</span>
                        </td>
                    </tr>

                    <tr>
                        <td><input type="text" name="tendh" size="20" id=""></td>
                    </tr>

                    <tr>
                        <td>
                            <span>Collection</span>
                        </td>
                    </tr>

                    <tr>
                        <td><input type="text" name="collection" size="20" id=""></td>
                    </tr>

                    <tr>
                        <td>
                            <span>Số Lượng</span>
                        </td>
                    </tr>

                    <tr>
                        <td><input type="text" name="soluong" size="20" id=""></td>
                    </tr>

                    <tr>
                        <td>
                            <span>Mô tả</span>
                        </td>
                    </tr>

                    <tr>
                        <td><input type="text" name="mota" size="20" id=""></td>
                    </tr>

                    <tr>
                        <td>
                            <span>Giá</span>
                        </td>
                    </tr>

                    <tr>
                        <td><input type="text" name="gia" size="20" id=""></td>
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

                <button class="button2" type="submit" value="Submit" name="submit">Thêm sản phẩm</button>
            </form>
        </div>
    </div>
    <!-------------------------------------------------------->
   



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
echo '<script language="javascript">alert("Vui Lòng Đăng Nhập!"); window.location="dangnhap.php";</script>';
?>