<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Khách hàng</title>
</head>
<body>
    <div class="admin-khachhang">
        <div class="khachhang-header">
            <h1>Khách hàng</h1>
        </div>  

        <div class="khachhang-body">

            <?php
                if(isset($_GET['ac'])){
            ?>



            <form action="admin.php?page=khachhang" method="post">
                     Sửa thông tin khách hàng
                    <div class="khachhang-add">
                <table>
                    <tr>
                        <td>Tên khách hàng:</td>
                        <td><input type="text" name="ten"></td>
                    </tr>
                    <tr>
                        <td>Tài khoản</td>
                        <td><input type="text" name="account"></td>
                    </tr>
                    <tr>
                        <td>Mật khẩu</td>
                        <td><input type="password" name="password"></td>
                    </tr>
                    <tr>
                        <td>Địa chỉ</td>
                        <td><input type="text" name="address"></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td><input type="text" name="email"></td>
                    </tr>
                    <tr>
                        <td>Vai trò</td>
                        <td><input type="checkbox" name="aoc"></td>
                    </tr>
                    <tr>
                        <td colspan="2"><input type="submit" name="update" value="update"></td>
                    </tr>
                </table>
            </div>
            </form>

            <?php }else{ ?>





            <form action="admin.php?page=khachhang" method="post">
            Thêm khách hàng
            <div class="khachhang-add">
                <table>
                    <tr>
                        <td>Tên khách hàng:</td>
                        <td><input type="text" name="ten"></td>
                    </tr>
                    <tr>
                        <td>Tài khoản</td>
                        <td><input type="text" name="account"></td>
                    </tr>
                    <tr>
                        <td>Mật khẩu</td>
                        <td><input type="password" name="password"></td>
                    </tr>
                    <tr>
                        <td>Địa chỉ</td>
                        <td><input type="text" name="address"></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td><input type="text" name="email"></td>
                    </tr>
                    <tr>
                        <td>Vai trò</td>
                        <td><input type="checkbox" name="aoc"></td>
                    </tr>
                    <tr>
                        <td colspan="2"><input type="submit" name="add" value="add"></td>
                    </tr>
                </table>
            </div>
            </form>

            <?php } ?>





                   
        </div>

      <form action="admin.php?page=khachhang" method="post">
      <div class="khachhang-show">
            <table border="1">
                <tr>
                    <td>Mã khách hàng</td>
                    <td>Tên khách hàng</td>
                    <td>Tài khoản</td>
                    <td>Mật khẩu</td>
                    <td>Địa chỉ</td>
                    <td>Email</td>
                    <td>Vai trò</td>
                    <td>Độ thân thiết</td>
                    <td>Sửa</td>
                    <td>Xóa</td>
                </tr>
                
                


                <tr>
                    <td>PHP here</td>
                    <td>PHP here</td>
                    <td>PHP here</td>
                    <td>PHP here</td>
                    <td>PHP here</td>
                    <td>PHP here</td>
                    <td>
                        <select name="lv">
                            <option value="0">Chọn cấp bậc</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select>
                    </td>
                    <td>PHP here</td>
                    <td><a href="admin.php?page=khachhang?&ac=update&id">Sua</a></td>
                    <td><a href="admin.php?page=khachhang?&ac=delete&id">Xóa</a></td>
                </tr>
            </table>
        </div>
      </form>

    </div>
</body>
</html>