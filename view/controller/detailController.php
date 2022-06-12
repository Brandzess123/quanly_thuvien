

 $db = mysqli_connect("localhost" , "root", "" , "quanlidongho")  or die ('Lỗi kết nối'); 
    mysqli_query($db,"SET NAMES 'UTF8'");

    if (mysqli_connect_errno()){
       echo "Connection Fail: ".mysqli_connect_errno();
       exit;
   }

   
 ?>

<?php
    //khởi chạy phiên từ trang xử lý đăng nhập
    $matk = $_SESSION['matk'];
    echo $matk;


if (isset($_POST["sbt"]))  //khi bấm vào submit là chạy
{

    //khởi tạo database
    
   //chạy lệnh
    $madh = $product['madh'];
    $gia = $product['gia'];


    //kiểm tra hàng đã có chưa -> nếu có thì tăng sl lên 1
    $sql = "SELECT * FROM `giohang`  WHERE matk = '$matk' AND madh = '$madh'";
    $check = mysqli_query($db, $sql);





    if (mysqli_num_rows($check) > 0) {
        $sql = "UPDATE `giohang` SET sl=  sl +1   WHERE matk = '$matk' AND madh = '$madh'";
    } else {
        $insert_id = $db->insert_id; //su dung id cua database auto increment
        $sql = "INSERT INTO `giohang`(`magh`, `matk`, `madh`, `sl`, `gia`) VALUES ('$insert_id','$matk','$madh',1,'$gia')";
        $result = mysqli_query($db, $sql);

        echo '<script language="javascript">alert("Thêm thành công!"); window.location="giohang.php";</script>';
    }
}





?>