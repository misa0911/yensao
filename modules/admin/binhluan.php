<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bình luận</title>
</head>
<body>
    <div class="bl-table">
        
        <div class="bl-header">
            <h1>Bình luận</h1>
        </div>

        <div class="bl-body">
            <table border="1">
                <tr>
                    <td>Mã bình luận</td>
                    <td>Mã khách hàng</td>
                    <td>Mã sản phẩm</td>
                    <td>Ngày bình luận</td>
                    <td style="padding: 0 10em">Nội dung</td>
                    <td>Xóa bình luận</td>
                </tr>
                <tr>
                    <td>PHP here</td>
                    <td>PHP here</td>
                    <td>PHP here</td>
                    <td>PHP here</td>
                    <td style="padding: 0 10em">PHP here</td>
                    <td><a href="admin.php?page=binhluan&ac=delete&id='.$id.'">Xóa bình luận</a></td>
                </tr>
            </table>
        </div>

    </div>
    
</body>
</html>