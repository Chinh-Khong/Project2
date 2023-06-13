<?php
session_start();
require_once('../../../Model/connect.php');

$sai = "";
$dangkithanhcong = "";
$hovaten = $tentaikhoan = $matkhau = $nmatkhau = "";
$hovatenErr = $tentaikhoanErr = $matkhauErr = $nmatkhauErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  function test_input($data)
  {
    $data = trim($data);
    $data = stripcslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
  // validate Họ Và tên
  if (empty($_POST['hovaten'])) {
    $hovatenErr = "Không được để trống Họ và tên";
  } else {
    // $hovaten = test_input($_POST['hovaten']);
    $_SESSION[$hovaten]["Full_Name"] = test_input($_POST["hovaten"]);

    if (!preg_match("/^[a-zA-Z ]*$/", $hovaten)) {
      $hovatenErr = "Chỉ cho phép chữ cái và khoảng trắng";
    }
  }
  // validate tên tài khoản
  if (empty($_POST['tentaikhoan'])) {
    $tentaikhoanErr = "Không được để trống tên tài khoản";
  } else {
    // $tentaikhoan = test_input($_POST['tentaikhoan']);
    $_SESSION[$tentaikhoan]["UserName"] = test_input($_POST["tentaikhoan"]);
    if (!preg_match("/^[a-zA-Z ]*$/", $tentaikhoan)) {
      $tentaikhoanErr = "Chỉ cho phép chữ cái và khoảng trắng";
    }
  }
  // validate mật khẩu
  if (!empty($_POST["matkhau"]) && !empty($_POST["nmatkhau"])) {
    // $matkhau = test_input($_POST['matkhau']);
    $_SESSION[$matkhau]["PassWord"] = test_input($_POST["matkhau"]);

    $nmatkhau = test_input($_POST['nmatkhau']);
    $uppercase = preg_match('@[A-Z]@', $matkhau);
    $lowercase = preg_match('@[a-z]@', $matkhau);
    $number = preg_match('@[0-9]@', $matkhau);
    $specialChars = preg_match('@[^\w]@', $matkhau);
    if (!$uppercase || !$lowercase || !$number || !$specialChars || strlen($matkhau) < 8) {
      $matkhauErr = 'Mật khẩu phải dài ít nhất 8 ký tự và phải bao gồm ít nhất một chữ cái viết hoa, một số và một ký tự đặc biệt.';
    }
  } else {
    $matkhauErr = $nmatkhauErr = "Không được để trống mật khẩu";
  }
  if ($_POST['matkhau'] != $_POST['nmatkhau']) {
    $nmatkhauErr = "Mật khẩu không trùng khớp";
  }
  if ($_POST['hovaten'] == "" ||$_POST['tentaikhoan'] == "" ||$_POST['matkhau'] == "" ||$_POST['nmatkhau'] == "" ||$_POST['matkhau'] != $_POST['nmatkhau']) {
    $sai = "Vui lòng điền đúng thông tin";
    $nmatkhauErr = "Mật khẩu không trùng khớp";
  }
  // check xem tên tài khoản có tồn tại hay không
  elseif ($_POST['hovaten'] != "" || $_POST['tentaikhoan'] != "" || $_POST['matkhau'] != "" || $_POST['nmatkhau'] != "" || $_POST['matkhau'] == $_POST['nmatkhau']) {
    $check = "select * from customer where UserName ='$tentaikhoan'";
    $result = mysqli_query($conn, $check);
    if (mysqli_num_rows($result) > 0) {
      $tentaikhoanErr = "Tên tài khoản tồn tại , vui lòng nhập tên khác.";
    } else {
      require_once('../../../Model/insert_cus.php');
    }

   
  }
}
?>