<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hồ Sơ Cá Nhân</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="style.css">
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
                        <div class="welcome">Chào mừng...
                            <?php ?> đã đến với CN Tivi chúng tôi
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
</body>
</html>