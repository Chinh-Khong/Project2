<?php
session_start();
require_once('../../../Model/connect.php');
        $tentaikhoan = $matkhau = "";
        $tentaikhoanErr = $matkhauErr = "";
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            function test_input($data){
                $data = trim($data);
                $data = stripcslashes($data);
                $data = htmlspecialchars($data);
                return $data;
            }
            if(empty($_POST["tentaikhoan"])){
                $tentaikhoanErr = "Yêu cầu nhập tên tài khoản của bạn";
            }
            else {
                $_SESSION [$tentaikhoan]['UserName'] = test_input($_POST["tentaikhoan"]);
            }
            if(!empty($_POST["matkhau"])){
                // mã hóa mật khẩu
                $_SESSION [$matkhau]['PassWord'] = test_input($_POST["matkhau"]);
            }else {
                $matkhauErr = "Yêu cầu bạn nhập mật khẩu tài khoản";
            }
        }
?>

<?php
    $sai = "";
    if (isset($_POST['dangnhap']) && $_POST['tentaikhoan'] != "" && $_POST['matkhau'] != "") {
        $tentaikhoan = $_POST["tentaikhoan"];
        $matkhau = $_POST["matkhau"];

        // check xem tài hoản đã được đăng kí hay ch 
        $check = "select * from customer where UserName = '$tentaikhoan'and Password = '$matkhau'";
        $result = mysqli_query($conn, $check);
        if (mysqli_num_rows($result) > 0) {
            $_SESSION["tentaikhoan"] = $tentaikhoan;
            // echo "đăng nhập thành công";
            header("location:/BT/Project2/View/Register_Submit/Source/register_submit.php");
        } else {
            $sai = " Tài khoản và mật khẩu không đúng";
        }
    }
    ?>