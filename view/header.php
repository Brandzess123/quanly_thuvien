<?php
//session_start();
?>
<?php
include 'connect.php';

if (isset($_SESSION['matk'])) {
    //echo "đoạn này code đã chạy: ";
    $matk =  $_SESSION['matk'];
    $sql = "SELECT usertype FROM taikhoan WHERE matk = '$matk' ";
    $result2 = mysqli_query($db, $sql);


    //if (isset($_SESSION['user_type'])) {
        while ($row = mysqli_fetch_array($result2)) {
            
            if ($row["usertype"] == "admin") {
              //  echo "giá trị".$row["web"]." ";
?>
               <li><a href="qltk.php">Quản lý Tài Khoản</a></li></lo>
                <li><a href="qlsp.php">Quản lý sản phẩm</a></li>

<?php
            }
        }

}

?>