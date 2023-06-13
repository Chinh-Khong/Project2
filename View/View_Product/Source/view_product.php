<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng Kí</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
</head>

<body>
<?php
    require_once("../../../Include/Header/header.php");
    ?>
  
    <!-- content -->
    <div class="container my-5">
        <div class="content">
            <div class="row">
                <div class="col-md-6">
                    <img src="https://icdn.dantri.com.vn/oaKoww9ZmEdAys7kKq3tLCCQS3fXEK/Image/2015/04/4K-1-f964f.jpg"
                        alt="">
                </div>
                <div class="col-md-6" style="background-color:pink;">
                    <h2 style="text-align:center">Đăng Kí</h2>
                    <p style="text-align:center">Sử dụng tài khoản của bạn để đăng nhập</p>
                    <form action="" method="post">
                        <div class="form-outline">
                            <input name="hovaten" placeholder="Họ và tên" type="text"
                                class="form-control form-control-lg" />
                        </div>
                        <br>
                        <div class="form-outline">
                            <input name="tentaikhoan" placeholder="Tên tài khoản" type="text"
                                class="form-control form-control-lg" />
                        </div>
                        <br>
                        <div class="form-outline">
                            <input name="matkhau" placeholder="Mật khẩu" type="text"
                                class="form-control form-control-lg" />
                        </div><br>
                        <div class="form-outline">
                            <input name="nmatkhau" placeholder="Nhập lại mật khẩu" type="text"
                                class="form-control form-control-lg" />
                        </div>
                        <div class="row my-2">
                            <div class="col-md-6"><a style="color: black;" href="">Đã có tài khoản? Đăng nhập ngay</a>
                            </div>
                            <div class="col-md-6"><button name="dangki" type="button" class="btn btn-primary btn-lg"
                                    style="padding-left: 2.5rem; padding-right: 2.5rem;border-radius: 30px;">Đăng
                                    Kí</button></div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
    <!-- footer -->
    <?php
    require_once("../../../Include/Footer/footer.php");
    ?>


</body>

</html>