<?php
    $servername = "localhost";
    $username="root";
    $password="";
    $dbname = "project2";
    $conn = new mysqli($servername,$username,$password,$dbname);
    if ($conn->connect_error) {
        echo "Kết nối không thành công" . $conn->connect_error;
    }

?>