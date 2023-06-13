<?php
require("connect.php");

if (isset($_POST["dangki"])) {
    $hovaten = $_POST["hovaten"];
    $tentaikhoan = $_POST["tentaikhoan"];
    $matkhau = $_POST["matkhau"];

    $insert = "insert into customer (Full_Name, UserName ,Password) values ('$hovaten','$tentaikhoan','$matkhau')";
    $result = mysqli_query($conn, $insert);
    if ($result) {
     
        header("location:/BT/Project2/View/Login/Source/login.php");

    } else {
        echo " không thanh công";
    }
}
?>