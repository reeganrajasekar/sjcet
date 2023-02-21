<?php 
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
require("../layout/db.php");
$imgfile_name = strtotime("now").$_FILES["img"]["name"];
$imgtarget_dir = "../../static/uploads/img/";
$imgtarget_file = $imgtarget_dir . basename($imgfile_name);
$imguploadOk = 1;
$imgimageFileType = strtolower(pathinfo($imgtarget_file,PATHINFO_EXTENSION));


if($imgimageFileType != "jpg" && $imgimageFileType != "jpeg" && $imgimageFileType != "png") {
    header("Location: /admin/gallery.php?err=Sorry, Image only jpg or jpeg or png files are allowed.");
    die();
}

  if (move_uploaded_file($_FILES["img"]["tmp_name"], $imgtarget_file)) {
      $name = test_input($_POST['name']);
      $sql = "INSERT INTO img (name , file)
      VALUES ('$name' ,'$imgfile_name')";
  
      if ($conn->query($sql) === TRUE) {
          header("Location: /admin/gallery.php?page=1&msg=Img added Successfully !");
          die();
      } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
      }
  
      $conn->close();
  
  } else {
      header("Location: /admin/gallery.php?page=1&err=Sorry, there was an error uploading your image.");
      die();
  }

?>