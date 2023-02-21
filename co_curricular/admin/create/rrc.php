<?php  
require("../layout/db.php");
$imgfile_name = strtotime("now").$_FILES["img"]["name"];
$imgtarget_dir = "../../../static/uploads/placement/";
$imgtarget_file = $imgtarget_dir . basename($imgfile_name);
$imguploadOk = 1;
$imgimageFileType = strtolower(pathinfo($imgtarget_file,PATHINFO_EXTENSION));


if($imgimageFileType != "jpg" && $imgimageFileType != "jpeg" && $imgimageFileType != "png") {
    header("Location: /co_curricular/admin/rrc.php?err=Sorry, Image only jpg or jpeg or png files are allowed.");
    die();
}

$test = getimagesize($_FILES["img"]["tmp_name"]);
$width = $test[0];
$height = $test[1];

if ($width != 300 || $height != 200)
{
header("Location: /co_curricular/admin/rrc.php?err=Image size should be 300px X 200px.");
die();
}

  if (move_uploaded_file($_FILES["img"]["tmp_name"], $imgtarget_file)) {
      $sql = "INSERT INTO club (file,name)
      VALUES ('$imgfile_name','rrc')";
  
      if ($conn->query($sql) === TRUE) {
          header("Location: /co_curricular/admin/rrc.php?page=1&msg=Img added Successfully !");
          die();
      } else {
          echo "Error: " . $sql . "<br>";
      }
  
      $conn->close();
  
  } else {
      header("Location: /co_curricular/admin/rrc.php?page=1&err=Sorry, there was an error uploading your image.");
      die();
  }

?>