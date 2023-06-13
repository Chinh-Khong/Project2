<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hồ sơ cá nhân</title>
</head>

<body>
    <!-- header -->
    <?php
    require_once("../../../Include/Header/header.php");
    ?>
    <!-- content -->

    <div class="container my-5">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Sản Phẩm</th>
                    <th> thông tin </th>
                    <th scope="col">Đơn Giá</th>
                    <th scope="col">Số lượng</th>
                    <th scope="col">Số Tiền</th>
                    <th scope="col">Thao Tác</th>

                </tr>
                <tr>
                    <td><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSZFiCE4c65qtdSKAGzAYBpDRj1_DsGULEiew&usqp=CAU" width="100px" height="55px" alt=""></td>
                    <td>Ở đây là thông tin sản phẩm</td>
                    <td><del>1600$</del><span>1000$</span></td>
                    <td>1</td>
                    <td>1000$</td>
                    <td><button class="btn btn-primary">Mua</button></td>
                    <td><button class="btn btn-danger">Xóa</button></td>
                </tr>
            </thead>
            <tbody>

            </tbody>
        </table>
    </div>

    <!-- footer -->
    <?php
    require_once("../../../Include/Footer/footer.php");

    ?>
</body>

</html>