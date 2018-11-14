<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Đơn hàng</title>
</head>
<body>
    <div class="admin-donhang">
        <div class="donhang-header">
            <h1>donhang-header</h1>
        </div>

        <div class="donhang-body">
            <table border="1">
                <tr>
                    <td>Mã hàng hóa</td>
                    <td>Mã khách hàng</td>
                    <td>Tổng tiền</td>
                    <td>Địa chỉ nhà</td>
                    <td>Ngày tạo đơn hàng</td>
                    <td>Xóa đơn hàng</td>
                </tr>
                <tr>
                    <td>PHP here</td>
                    <td>PHP here</td>
                    <td>PHP here</td>
                    <td>PHP here</td>
                    <td>PHP here</td>
                    <td><a href="admin.php?page=donhang&ac=delete&id='.$id.'">Xoa</a></td>
                </tr>
            </table>
        </div>
    </div>
</body>
</html>