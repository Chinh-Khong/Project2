<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bill</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="bill.css">
</head>

<body>
    <!-- header -->
<?php
    require_once("../../../Include/Header/header.php");
    ?>
    <!-- content -->

    <div class="container my-5">
        <!-- <div class="sanpham">
            <img class="shadow p-3 mb-5 bg-white rounded" width="200px" height="200px" class="anhsanpham"
                src="https://cdn11.dienmaycholon.vn/filewebdmclnew/public//userupload/images/cong-nghe-hinh-anh-tren-tivi-samsung-6(1).jpg"
                alt="">
            <div class="thongtinsp">
                <ul>
                    <li>TV Sony</li>
                    <li>Tổng tiền: 18.000.000.vnđ</li>
                    <li>Số lượng sản phẩm: 1</li>
                    <li>Nơi nhận hàng: 18 - Tam Chinh - Hà Nội</li>
                </ul>
            </div>

            <div class="col-md-6"><button name="dathanhtoan" type="button" class="btn btn-primary btn-lg"
                    style="margin-left:100px;"
                    style="padding-left: 1.5rem; padding-right: 1.5rem; border-radius: 30px;">Đã thanh toán</button>
            </div>
        </div> -->
        <div class="sanpham">
            <div class="row">
                <div class="col-md-4">
                    <img class="shadow p-3 mb-5 bg-white rounded" width="200px" height="200px" class="anhsanpham"
                        src="https://cdn11.dienmaycholon.vn/filewebdmclnew/public//userupload/images/cong-nghe-hinh-anh-tren-tivi-samsung-6(1).jpg"
                        alt="">
                </div>
                <div class="col-md-4">
                    <div class="thongtinsp">
                        <ul>
                            <li>TV Sony</li>
                            <li>Tổng tiền: 18.000.000.vnđ</li>
                            <li>Số lượng sản phẩm: 1</li>
                            <li>Nơi nhận hàng: 18 - Tam Chinh - Hà Nội</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <!-- <div class="col-md-6"><button name="dathanhtoan" type="button" class="btn btn-primary btn-lg"
                            style="margin-left:100px;"
                            style="padding-left: 1.5rem; padding-right: 1.5rem; border-radius: 30px;">Đã thanh
                            toán</button>
                    </div> -->
                    <button type="button" class="btn btn-primary"
                        style="padding-left: 1.5rem; padding-right: 1.5rem; border-radius: 30px;">Đã thanh toán</button>
                </div>
            </div>
        </div>
        <div class="table-responsive-sm">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th class="center">STT</th>
                        <th>Tên Sản Phẩm</th>
                        <th>Số Lượng</th>
                        <th class="right">Đơn Giá</th>
                        <th class="center">Thành tiền</th>

                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="center">1</td>
                        <td class="left strong">Iphone 10X</td>
                        <td class="left">12</td>
                        <td class="right">$1500</td>
                        <td class="center">1000000$</td>

                    </tr>
                    <tr>
                        <td class="center">2</td>
                        <td class="left">Iphone 8X</td>
                        <td class="left">1</td>
                        <td class="right">$1200</td>
                        <td class="center">1000000$</td>

                    </tr>
                    <tr>
                        <td class="center">3</td>
                        <td class="left">Samsung 4C</td>
                        <td class="left">22</td>
                        <td class="right">$800</td>
                        <td class="center">1000000$</td>

                    </tr>
                    <tr>
                        <td class="center">4</td>
                        <td class="left">Google Pixel</td>
                        <td class="left">34</td>
                        <td class="right">$500</td>
                        <td class="center">1000000$</td>

                    </tr>
                </tbody>
            </table>
        </div>

    </div>



    <!-- footer -->
    <?php
    require_once("../../../Include/Footer/footer.php");
    ?>

</body>

</html>