<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>chi tiết sản phẩm |</title>
    <link href="css/hienthi.css" rel="stylesheet">
</head>

<body>
    <div id="header">
        <div class="topheader">
            <div class="logo">
                <a href="trangchu.php">OMEGA</a>

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


        <div class="headertext">
            <h1>The Lawson Collection</h1>
            <p>We have the expertise to repair any watch, including vintage watches and antique pocket watches.</p>

            <a href=" ">View prices</a>
        </div>
    </div>

    <div id="supercontent">
        <div id="content">

            <!-------------------------------------------------------------->
            <?php
            $sql = "SELECT * FROM dongho ";           // <!--WHERE collection ='DARK SIDE OF THE MOON' -->
            $result = mysqli_query($db, $sql);

            $search = isset($_GET['name']) ? $_GET['name'] : "";
          

            if ($search) {
                $result = mysqli_query($db, "SELECT * FROM `dongho` WHERE `tendh` LIKE '%" . $search . "%' ORDER BY `madh` ");
            } else {
                $result = mysqli_query($db, "SELECT * FROM `dongho` ORDER BY `madh` ");
               
            }
            ?>
            <!-- <div class="timkiem">
                <form action="timkiem.php" method="POST" action="timkiem.php" role="form" name="timkiem">
                    <table>
                        <tr>
                            <td><input type="text" name="tukhoa" placeholder="Nhập tên đồng hồ"></td>
                            <button class="button2" type="submit" value="Submit">Tìm Kiếm</button>
                        </tr>
                    </table>
                </form>
            </div> -->

            <div class="timkiem">
                <form method="GET" role="form" name="timkiem">

                    <table>
                        <tr>
                        <button type="submit" value="Tìm kiếm">Tìm kiếm</button>
                            <input type="text" value="<?= isset($_GET['name']) ? $_GET['name'] : "" ?>" name="name" />
                            
                        </tr>
                    </table>


                </form>
            </div>



            <!-------------------------------------------------------------->

            <div class="text">
                <h2>Collection</h2>
            </div>

            <?php
            $db = mysqli_connect("localhost", "root", "", "quanlidongho")  or die('Lỗi kết nối');
            mysqli_query($db, "SET NAMES 'UTF8'");
            

            while ($row = mysqli_fetch_array($result)) {

            ?>

                <div class="wcollection">

                    <div class="infwatch">

                        <a href="detail.php?id= <?= $row['madh'] ?>"> <img src=" images/<?= $row['picture'] ?>" title="<?= $row['tendh'] ?>"></a>
                        <!--CHỖ NÀY CẦN LINK THẾ NÀO -->
                        <!--MÃ ID LUÔN PHẢI LÀ SỐ MỚI CÓ THỂ TẠO TRANG CHI TIẾT -->

                        <h2><?php echo $row["tendh"] ?></h2>
                        <p>giá: <?php echo $row["gia"] . "$" ?> </p>
                        <p>mã đồng hồ: <?php echo $row["madh"] ?> </p>
                    </div>

                <?php
            }
                ?>
                </div>


        </div>

        <div class="footer">
            <div class="ft">
                <h3>
                    Họ tên:Đặng Minh Hiếu <br>
                    MSV: 19103100078 <br>
                    Trường: ĐHKT-KT CÔNG NGIỆP<br>
                </h3>
            </div>
        </div>


    </div>


    <!-------------------------------------------------->








</body>