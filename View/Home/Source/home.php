<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CN TV</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="home.css">
    <script src="js.js"></script>
    <!-- nhúng font awesome để lắp icon chuyển ảnh trong ảnh đầu content -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <!-- JQuery cdn -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"
        integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
</head>

<body>
    <!-- header -->
    <?php
    require_once("../../../Include/Header/header.php");
    ?>

    <!-- content -->

    <div class="container">
        <div class="slide">
            <img id="img" src="../Home/anh2.jpg" alt="img">
            <i class="fa fa-chevron-left" onclick="prev()"></i>
            <i class="fa fa-chevron-right" onclick="next()"></i>

        </div>
        <div class="menu-sanpham">
            <h2>Bộ lọc</h2>
            <ul>
                <li><a style="color: black" href="">Hãng</a></li>
                <li><a style="color: black" href="">Giá</a></li>
                <li><a style="color: black" href="">Kích cỡ màn hình</a></li>
                <li><a style="color: black" href="">Loại TV</a></li>
            </ul>
            <div class="row">
                <div class="col-md-3">
                    <div class="shadow p-3 mb-5 bg-body rounded">
                        <div class="img">
                            <div class="sale">
                                <p>45%</p>
                            </div>
                            <img width="100%" src="https://mihanoi.vn/wp-content/uploads/2023/03/2-16-247x247.jpg"
                                alt="">
                            <div class="MuaNgay">
                                <a href="">mua ngay</a>
                            </div>
                        </div>
                        <div class="thongtin_sp">
                            <span>Tivi 8K QLED
                                Samsung</span>
                            <br>
                            <del>2000$</del>
                            <div class="price">
                                <ul>
                                    <li id="tien">1000$</li>
                                    <li><a href=""><i class="fa-sharp fa-solid fa-cart-shopping"></i></a></li>
                                </ul>
                            </div>
                            <!-- <p>1000$</p>
                            <i class="fa-sharp fa-solid fa-cart-shopping"></i> -->
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="shadow p-3 mb-5 bg-body rounded">
                        <div class="img"><img width="100%"
                                src="https://mihanoi.vn/wp-content/uploads/2023/03/tivi-xiaomi-s65-65-inch-2023-chinh-hang-11-247x247.png"
                                alt="">
                            <div class="MuaNgay">
                                <a href="">mua ngay</a>
                            </div>
                        </div>
                        <div class="thongtin_sp">
                            <span>Tivi 8K QLED
                                Samsung</span>
                            <br>
                            <del>2000$</del>
                            <p>1000$</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="shadow p-3 mb-5 bg-body rounded">
                        <div class="img"><img width="100%"
                                src="https://mihanoi.vn/wp-content/uploads/2023/04/2-247x247.png" alt="">
                            <div class="MuaNgay">
                                <a href="">mua ngay</a>
                            </div>
                        </div>
                        <div class="thongtin_sp">
                            <span>Tivi 8K QLED
                                Samsung</span>
                            <br>
                            <del>2000$</del>
                            <p>1000$</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="shadow p-3 mb-5 bg-body rounded">
                        <div class="img"><img width="100%"
                                src="https://mihanoi.vn/wp-content/uploads/2023/03/1-18-247x247.jpg" alt="">
                            <div class="MuaNgay">
                                <a href="">mua ngay</a>
                            </div>
                        </div>
                        <div class="thongtin_sp">
                            <span>Tivi 8K QLED
                                Samsung</span>
                            <br>
                            <del>2000$</del>
                            <p>1000$</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- hàng 2 -->
            <div class="row">
                <div class="col-md-3">
                    <div class="shadow p-3 mb-5 bg-body rounded">
                        <div class="img">

                            <img width="100%" src="https://mihanoi.vn/wp-content/uploads/2023/03/2-16-247x247.jpg"
                                alt="">
                            <div class="MuaNgay">
                                <a href="">mua ngay</a>
                            </div>
                        </div>
                        <div class="thongtin_sp">
                            <span>Tivi 8K QLED
                                Samsung</span>
                            <br>
                            <del>2000$</del>
                            <p>1000$</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="shadow p-3 mb-5 bg-body rounded">
                        <div class="img"><img width="100%"
                                src="https://mihanoi.vn/wp-content/uploads/2023/03/tivi-xiaomi-s65-65-inch-2023-chinh-hang-11-247x247.png"
                                alt="">
                            <div class="MuaNgay">
                                <a href="">mua ngay</a>
                            </div>
                        </div>
                        <div class="thongtin_sp">
                            <span>Tivi 8K QLED
                                Samsung</span>
                            <br>
                            <del>2000$</del>
                            <p>1000$</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="shadow p-3 mb-5 bg-body rounded">
                        <div class="img"><img width="100%"
                                src="https://mihanoi.vn/wp-content/uploads/2023/04/2-247x247.png" alt="">
                            <div class="MuaNgay">
                                <a href="">mua ngay</a>
                            </div>
                        </div>
                        <div class="thongtin_sp">
                            <span>Tivi 8K QLED
                                Samsung</span>
                            <br>
                            <del>2000$</del>
                            <p>1000$</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="shadow p-3 mb-5 bg-body rounded">
                        <div class="img"><img width="100%"
                                src="https://mihanoi.vn/wp-content/uploads/2023/03/1-18-247x247.jpg" alt="">
                            <div class="MuaNgay">
                                <a href="">mua ngay</a>
                            </div>
                        </div>
                        <div class="thongtin_sp">
                            <span>Tivi 8K QLED
                                Samsung</span>
                            <br>
                            <del>2000$</del>
                            <p>1000$</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- hàng 3 -->
            <div class="row">
                <div class="col-md-3">
                    <div class="shadow p-3 mb-5 bg-body rounded">
                        <div class="img">

                            <img width="100%" src="https://mihanoi.vn/wp-content/uploads/2023/03/2-16-247x247.jpg"
                                alt="">
                            <div class="MuaNgay">
                                <a href="">mua ngay</a>
                            </div>
                        </div>
                        <div class="thongtin_sp">
                            <span>Tivi 8K QLED
                                Samsung</span>
                            <br>
                            <del>2000$</del>
                            <p>1000$</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="shadow p-3 mb-5 bg-body rounded">
                        <div class="img"><img width="100%"
                                src="https://mihanoi.vn/wp-content/uploads/2023/03/tivi-xiaomi-s65-65-inch-2023-chinh-hang-11-247x247.png"
                                alt="">
                            <div class="MuaNgay">
                                <a href="">mua ngay</a>
                            </div>
                        </div>
                        <div class="thongtin_sp">
                            <span>Tivi 8K QLED
                                Samsung</span>
                            <br>
                            <del>2000$</del>
                            <p>1000$</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="shadow p-3 mb-5 bg-body rounded">
                        <div class="img"><img width="100%"
                                src="https://mihanoi.vn/wp-content/uploads/2023/04/2-247x247.png" alt="">
                            <div class="MuaNgay">
                                <a href="">mua ngay</a>
                            </div>
                        </div>
                        <div class="thongtin_sp">
                            <span>Tivi 8K QLED
                                Samsung</span>
                            <br>
                            <del>2000$</del>
                            <p>1000$</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="shadow p-3 mb-5 bg-body rounded">
                        <div class="img"><img width="100%"
                                src="https://mihanoi.vn/wp-content/uploads/2023/03/1-18-247x247.jpg" alt="">
                            <div class="MuaNgay">
                                <a href="">mua ngay</a>
                            </div>
                        </div>
                        <div class="thongtin_sp">
                            <span>Tivi 8K QLED
                                Samsung</span>
                            <br>
                            <del>2000$</del>
                            <p>1000$</p>
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