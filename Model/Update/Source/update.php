<?php
session_start();
// require_once("\BT\Project2\Controller\RegisterCl.php");
require_once('../../connect.php');
$id = $_GET["capnhatid"];
$sai = "";
$dangkithanhcong = "";
$hovaten = $tentaikhoan = $matkhau = $nmatkhau = $sdt = $diachi = "";
$hovatenErr = $tentaikhoanErr = $matkhauErr = $nmatkhauErr =  $sdtErr = $diachiErr = "";

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

  //check sdt 

  if(empty($_POST["sdt"])){
    $sdtErr = "Không được để trống số điện thoại";
  }else {
    $_SESSION[$sdt]["Phone"] = test_input($_POST["sdt"]);
    if (preg_match('/^[0-9]{10}+$/', $sdt)) {
        $sdtErr = "Chỉ cho phép số ";
    }
  }


//check địa chỉ
if (empty($_POST["diachi"])) {
    $diachiErr = "Không được để trống địa chỉ";
}
else {
    $_SESSION[$diachi]["Address"] = test_input($_POST["diachi"]);
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
    } elseif(isset($_POST["capnhat"])) {
        $hovaten = $_POST['hovaten'];
        $tentaikhoan = $_POST['tentaikhoan'];
        $matkhau = $_POST["matkhau"];
        $sdt = $_POST["sdt"];
        $diachi = $_POST["diachi"];
        $capnhat = "update customer set Full_Name = '$hovaten',UserName = '$tentaikhoan',PassWord = '$matkhau',Phone='$sdt',Address = '$diachi' where Customer_ID = '$id'";
        $result = mysqli_query($conn,$update);
        if ($result) {
            echo "cập nhật thành công";
        }
        else {echo "  CẬP NHAAJAT KHÔNG THÀNH COng";}
    }

   
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hồ Sơ Cá Nhân</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="kkkk.css">
    <script src="js.js"></script>
    <!-- nhúng font awesome để lắp icon chuyển ảnh trong ảnh đầu content -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <!-- JQuery cdn -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"
        integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
</head>

<body>
    <!-- header -->
    <div class="dau">
        <div class="container">
            <div class="header">
                <div class="row" style="align-items: center;">
                    <div class="col-md-2">
                        <div class="logo">
                            <img width="100%" height="100%" src="logo.gif" alt="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="welcome">Chào mừng
                            <?php echo $_SESSION[$tentaikhoan]["UserName"]; ?> đã đến với CN Tivi chúng tôi
                        </div>

                        <div class="menu">
                            <input class="search" type="text" placeholder="Search">
                            <ul>
                                <li><a href="">Trang Chủ</a></li>
                                <li><a href="">Sản Phẩm</a></li>
                                <li><a href="">Khuyến Mãi</a></li>
                                <li><a href="">Liên Hệ</a></li>
                            </ul>

                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="orther">
                            <ul>
                                <li><a href="\BT\Project2\View\Profile\Source\profile.php"><i
                                            class="fa-solid fa-user"></i></a></li>
                                <li><a href="../../Cart/Source/cart.php"> <i
                                            class="fa-sharp fa-solid fa-cart-shopping"></i> Giỏ Hàng</a></li>
                                <li><a href="\BT\Project2\View\Login\Source\login.php">Đăng xuất</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- content -->

    <div class="container">
        <div class="profile_detail">
            <form action="" method="post">

                <div class="row">
                    <div class="col-md-6 mb-4">
                        <label for="">Tên tài khoản:</label>
                        <div class="form-outline">
                            <input name="tentaikhoan" type="text"
                                value="<?php echo $_SESSION[$tentaikhoan]["UserName"]; ?>"
                                class="form-control form-control-lg" />
                        </div>

                    </div>
                    <div class="col-md-6 mb-4">
                        <label for="">Mật khẩu:</label>
                        <div class="form-outline">
                            <input name="matkhau" type="text" value="<?php echo $_SESSION[$matkhau]["PassWord"]; ?>"
                                class="form-control form-control-lg" />
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-4">
                        <label for="">Họ và tên:</label>
                        <div class="form-outline">
                            <input name="hovaten" type="text" placeholder="..."
                                value="<?php echo $_SESSION[$hovaten]["Full_Name"]; ?>"
                                class="form-control form-control-lg" />
                        </div>

                    </div>
                    <div class="col-md-6 mb-4">
                        <label for="">Số điện thoại:</label>
                        <div class="form-outline">
                            <input name="sdt" type="text" id="sdt" placeholder="..."
                                value="<?php echo (!empty($_POST["sdt"])) ? $_POST["sdt"] : false; ?>"
                                class="form-control form-control-lg" />
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label for="">Địa Chỉ:</label>
                        <div class="form-outline">
                            <input name="diachi" type="text" placeholder="..."
                                value="<?php echo (!empty($_POST["diachi"])) ? $_POST["diachi"] : false; ?>"
                                class="form-control form-control-lg" />
                        </div>
                    </div>
                </div>
                <button type="submit" name="capnhat" class="btn btn-primary my-2">Cập nhật</button>
            </form>
        </div>
    </div>

    <!-- footer -->
    <?php
    require_once("../../../Include/Footer/footer.php");
    ?>
</body>

</html>