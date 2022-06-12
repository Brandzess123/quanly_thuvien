<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="css/giohang.css" rel="stylesheet">
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
    //khởi chạy phiên từ trang xử lý đăng nhập
    $matk = $_SESSION['matk'];
    //echo $matk;
    include 'connect.php';


    $result = mysqli_query($db, "SELECT * FROM `taikhoan` WHERE `matk` = $matk");
    $product = mysqli_fetch_assoc($result);
    ?>




    <?php
    if (isset($_GET['action']))
    {

        switch ($_GET['action']) {  //BÊN NÀY NÓ NHẬN ACTION


            case "delete":    //TRƯỜNG HỢP NÓ NHẬN CASE DELETE

                if (isset($_GET['id'])) {              //

                    $delete = mysqli_query($db, "DELETE FROM `giohang` WHERE `magh` = " . $_GET['id']); //xóa sản phẩm 
                }
                header('Location: ./giohang.php'); //reset lại trang
                break;





                case "submit":
                    if (isset($_POST['smt'])) { //Cập nhật số lượng sản phẩm
                        echo '<script language="javascript">alert("Đặt hàng thành công!"); window.location="giohang.php";</script>'; 
                        $delete = mysqli_query($db, "DELETE FROM `giohang` WHERE `matk` = " . $matk); //xóa sản phẩm        

                    } 
                    else 
                    {
                        echo '<script language="javascript">alert("Đặt hàng thất bại!"); window.location="giohang.php";</script>';  

                    }
                    break;
        }
    }

    ?>
    <!-------------------------------------------------------------->
    <div id="content">
        <div class="text">
            <h2>TRANG GIỎ HÀNG </h2>



        </div>

        <div class="product">
            <form id="cart-form" action="giohang.php?action=submit" method="POST">
                <div class="giohang">
                    <table>
                        <tr style="font-weight: bold">

                            <td>TÊN ĐỒNG HỒ</td>
                            <td>ẢNH ĐỒNG HỒ</td>
                            <td>ĐƠN GIÁ</td>
                            <td>SỐ LƯỢNG</td>
                            <td>THÀNH TIỀN</td>
                            <td>CHỨC NĂNG</td>
                        </tr>

                        <?php
                        $resultw = mysqli_query($db,  "SELECT * FROM `giohang`,dongho where giohang.madh = dongho.madh AND giohang.matk= $matk;");
                        $tongtien = 0;
                        while ($row = mysqli_fetch_array($resultw)) {

                        ?>

                            <tr>
                                <td><?php echo $row["tendh"] ?></td>
                                <td><img src="images/<?php echo $row["picture"] ?>"></td>
                                <td><?php echo $row["gia"] ?></td>
                                <td><?php echo $row["sl"] ?></td>

                                <td><?php echo ($row["gia"] * $row["sl"]) ?></td>
                                <td><a href="giohang.php?action=delete&id=<?= $row['magh'] ?>">Xóa</a></td>
                                <?php $tongtien += ($row["gia"] * $row["sl"]); ?>
                            </tr>

                        <?php
                        }
                        ?>


                        <tr>
                            <td></td>
                            <td>Tổng tiền</td>
                            <td></td>
                            <td></td>
                            <td><?php echo $tongtien ?></td>
                            <td></td>

                        </tr>





                    </table>

                </div>
                <div class="dathang">
                    <h1 style="margin-bottom: 50px">Xin chào <?= $product['hoten'] ?></h1> 
                    <h2 >Mời bạn nhập địa chỉ: </h2>
                    <input type="text" name="diachi" size="40" placeholder="<?= $product['diachi'] ?>(mặc định)" id=""> <br>

                    <h2 >Mời bạn nhập SDT: </h2>
                    <input type="text" name="diachi" size="40" placeholder="0<?= $product['SDT'] ?>(mặc định)" id=""> <br>
                    <button class="button2" type="submit" value="Submit" name="smt" >Đặt hàng</button>
                


                </div>
            </form>


        </div>
    </div>


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

</html>