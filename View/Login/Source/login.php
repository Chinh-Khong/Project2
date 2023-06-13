<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="kk.css">
</head>

<body>
    <!-- header -->

    <?php
    require_once("../../../Include/Header/header.php");
    ?>
    <?php
    require_once('../../../Controller/LoginCl.php');
    ?>

    <!-- content -->
    <div class="container my-5">
        <div class="content">
            <div class="row">
                <div class="col-md-6">
                    <img style="display:block;" width="660px" height="100%"
                        src="https://icdn.dantri.com.vn/oaKoww9ZmEdAys7kKq3tLCCQS3fXEK/Image/2015/04/4K-1-f964f.jpg"
                        alt="">
                </div>
                <div class="col-md-6" style="background-color:pink;">
                    <div class="login">
                        <h2 style="text-align:center">Đăng Nhập</h2>
                        <p style="text-align:center">Sử dụng tài khoản của bạn để đăng nhập</p>
                        <p style="text-align:center; color : red; font-size:20px">
                            <?php echo $sai; ?>
                        </p>
                      
                        <form action="" method="post">


                            <span class="error">
                                <?php
                                echo $tentaikhoanErr;
                                ?>
                            </span>
                            <div class="form-outline">
                                <input name="tentaikhoan" placeholder="Tên tài khoản" type="text"
                                    class="form-control form-control-lg"
                                    value="<?php echo (!empty($_POST["tentaikhoan"])) ? $_POST["tentaikhoan"] : false; ?>" />
                            </div>
                            <br>
                            <div class="form-outline">
                                <span class="error">
                                    <?php
                                    echo $matkhauErr;
                                    ?>
                                </span>

                                <input name="matkhau" placeholder="Mật khẩu" type="text"
                                    class="form-control form-control-lg"
                                    value="<?php echo (!empty($_POST["matkhau"])) ? $_POST["matkhau"] : false; ?>" />
                            </div>
                            <br>


                            <div class="row my-2" style="margin-left:20px;">
                                <div class="col-md-6"><a style="color: black;" href="">Quên mật khẩu</a></div>
                                <div class="col-md-6"><button name="dangnhap" type="submit"
                                        class="btn btn-primary btn-lg"
                                        style="padding-left: 2.5rem; padding-right: 2.5rem; border-radius: 30px;">Đăng
                                        Nhập</button>
                                </div>
                                <div class="col-md-6"><a style="color: black;" href="\BT\Project2\View\Register\Source\register.php">Chưa có tài khoản? Đăng kí
                                        ngay</a></div>
                            </div>
                        </form>
                    </div>
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