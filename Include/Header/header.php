<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
   <style>
    * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
.dau{
    background-color: #e83e8c;
}
li {
    list-style: none;
}

a {
    text-decoration: none;
    color: #FFFFFF;
}

/* .header {
    display: flex;
    justify-content: space-between;
    align-items: center;
} */

.logo {
    width: 130px;
    height: 130px;
}

.search {
    border: none;
    border-radius: 10px;
    height: 32px;
    width: 100%;
    max-width: 100%;
    padding-left: 10px;
    background: #ffffff;
}
.menu input:hover{
        border: 4px solid rgb(203, 123, 123);
}
.menu ul {
    display: flex;
}
.menu ul li{
    padding: 20px 15px 0px 15px;
}
.menu ul li a{
    font-weight: bold;
}
.menu ul li a:hover{
    color: rgb(14, 253, 253);
}

.orther{
    margin-bottom: 50px;
}
.orther ul{
    display: flex; 
}
.orther ul li{
    padding: 0px 15px;
}
.orther ul li a:hover{
    color: rgb(14, 253, 253); 
}

.login{
    margin: 25px;
}
   </style>
</head>

<body>

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
                        <div class="menu">
                            <input class="search" type="text" placeholder="Search">
                            <ul>
                                <li><a href="\BT\Project2\View\Home\Source\home.php">Trang Chủ</a></li>
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
</body>

</html>