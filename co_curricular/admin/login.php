<?php
session_start();
if ($_POST["email"]=="admin@gmail.com") {
    if ($_POST["password"]=="admin") {
        $_SESSION["lock"] = "xiny9387tdpq##*&B98oyo8B@*O&^PB^B$";
        header("Location: /co_curricular/admin/home.php");
        die();
    } else {
        header("Location: /co_curricular/admin/?err=username or password is incorrect!");
        die();
    }
} else {
    header("Location: /co_curricular/admin/?err=username or password is incorrect!");
    die();
}


?>