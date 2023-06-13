<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản Lý Sản Phẩm</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="product_management.css">
</head>

<body>
<div class="dau">
        <div class="container">
            <!-- <div class="header">

                <div class="logo">
                    <img width="100px" height="100px" src="logo.gif" alt="">
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
                <div class="orther">
                    <ul>
                        <li><a href="">Đăng Nhập</a></li>
                        <li><a href="">Đăng Kí</a></li>
                        <li><a href="">Giỏ Hàng</a></li>
                    </ul>
                </div>

            </div> -->

            <div class="header">
                <div class="row" style="align-items: center;">
                <div class="col-md-2">
                    <div class="logo">
                        <img width="100%" height="100%" src="logo.gif" alt="">
                    </div>
                </div>
                <div class="col-md-6">
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
                            <li><a href="">Đăng Nhập</a></li>
                            <li><a href="">Đăng Kí</a></li>
                            <li><a href="">Giỏ Hàng</a></li>
                        </ul>
                        </div>
                </div>
                </div>

            </div>
        </div>
    </div>

    <!-- content -->
    <div class="container my-5">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Mã Sản Phẩm</th>
                    <th scope="col">Tên Sản Phẩm</th>
                    <th scope="col">Hãng</th>
                    <th scope="col">Giá Bán</th>
                    <th scope="col">Trạng Thái</th>
                    <th scope="col">Action</th>
                </tr>
                <tr>
                    <td>Sony01</td>
                    <td>Sony</td>
                    <td>Sony</td>
                    <td>1000$</td>
                    <td>Cháy Hàng</td>
                    <td><button class="btn btn-primary">Delete</button></td>
                    <td><button class="btn btn-danger">Update</button></td>
                </tr>
            </thead>
            <tbody>

            </tbody>
        </table>
    </div>
    <!-- footer -->
    <div class="container">
        <div class="footer">
            <div class="row">
                <div class="col-md-3">
                    <p style="font-weight: bold;">Hỗ trợ khách hàng </p>
                    <li><a style="color: black;" href="">Chính</a></li>
                    <li><a style="color: black;" href="">Nam</a></li>
                    <li><a style="color: black;" href="">CN TV</a></li>
                </div>

                <div class="col-md-3">
                    <p style="font-weight: bold;">Thanh toán</p>
                    <li><a style="color: black;" href="">Chính</a></li>
                    <li><a style="color: black;" href="">Nam</a></li>
                    <li><a style="color: black;" href="">CN TV</a></li>
                </div>
                <div class="col-md-3">
                    <p style="font-weight: bold;">Quản lý tài khoản</p>
                    <li><a style="color: black;" href="">Chính</a></li>
                    <li><a style="color: black;" href="">Nam</a></li>
                    <li><a style="color: black;" href="">CN TV</a></li>
                </div>
                <div class="col-md-3">
                    <p style="font-weight: bold;">Liên hệ</p>
                    <li><a style="color: black;" href="">Chính</a></li>
                    <li><a style="color: black;" href="">Nam</a></li>
                    <li><a style="color: black;" href="">CN TV</a></li>
                </div>
            </div>
            <br>
            <div class="address">
                <p>Địa chỉ: 18 - Tam Chinh</p>
            </div>
        </div>
    </div>

</body>

</html>