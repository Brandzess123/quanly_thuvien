<?php
if(isset($_POST['submit'])&& isset($_FILES['my_image']))
{
     echo "Đặng Minh Hiếu đẹp trai";
     echo"<pre>";
     print_r($_FILES['my_image']);
     echo"</pre>";

     $img_name=$_FILES['my_image']['name']; //lấy dữ liệu từ hàm array
     $img_size=$_FILES['my_image']['size'];
     $tmp_name=$_FILES['my_image']['tmp_name'];
     $error=$_FILES['my_image']['error'];

    if($error == 0)
    {
       
          $img_ex = pathinfo ($img_name,PATHINFO_EXTENSION);
          $img_ex_lc = strtolower($img_ex);
          echo($img_ex);
          $allowed_exs=array("jpg","jpeg","png");
          if (in_array($img_ex_lc,$allowed_exs))
          {
               $new_img_name=uniqid("IMG-",true).'.'.$img_ex_lc;  
               $img_upload_path = 'images /'.$new_img_name;
               move_uploaded_file($tmp_name, $img_upload_path);
               //echo "$img_upload_path";
               
               unlink('images \test.jpg');
          }
          else
          {
               $em="You can't upload files of this type";
              
          }
       
      // }
   }
}
else{
     header("Location:index.php");
}
?>