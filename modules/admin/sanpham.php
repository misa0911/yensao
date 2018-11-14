<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<?php
require "dao/loai.php";
require "dao/sanpham.php";
if(isset($_POST['addnew'])){
  if($_POST['addnew']){
    $ten_sp=$_POST['ten_sp'];
    $don_gia=$_POST['gia'];
    $giam_gia=$_POST['giamgia'];
    $ngay_dang=$_POST['ngaydang'];
    $hinh=$_POST['hinh'];
    $ma_loai=$_POST['ma_loai'];
    $mo_ta=$_POST['mota'];
    if(isset($_POST['dac_biet'])){
      if($_POST['dac_biet']){
        $dac_biet=1;
      }else{
        $dac_biet=0;
      }
    }else{
      $dac_biet=0;
    }
    san_pham_insert($ten_sp,$ma_loai,$don_gia,$giam_gia,$ngay_dang,$hinh,$mo_ta,$dac_biet);
  }
}
if (isset($_GET['action'])) {
  if ($_GET['action']=="delete") {
           san_pham_delete($_GET['id']);
      }else{}
}

if(isset($_GET['action'])){
if ($_GET['action']=="delete") {
           san_pham_delete($_GET['id']);
      }
}

?>

    <div class="sp-header">
        <h1>San Pham</h1>
        
    </div>

    <div class="sp-body">
        <div class="sp-add">
            <form action="admin.php?page=sanpham" method="post">
            <table>
                <tr>
                    <td>Tên sản phẩm:</td>
                    <td><input type="text" name='sp-ten'></td>
                </tr>
                <tr>
                    <td>Đơn giá</td>
                    <td><input type="text" name="sp-gia"></td>
                </tr>
                <tr>
                    <td>Giảm giá</td>
                    <td><input type="text" name="sp-sale"></td>
                </tr>
                <tr>
                    <td>Ngày đăng</td>
                    <td><input type="text" name="sp-date"></td>
                </tr>
                <tr>
                    <td>Hình</td>
                    <td><input type="file" name="sp-hinh"></td>
                </tr>
                <tr>
                    <td>Mô tả</td>
                    <td>
                        <textarea name="sp-about"cols="30" rows="10"></textarea>
                    </td>
                </tr>
                <tr>
                    <td>Lượt xem</td>
                    <td><input type="text" name="sp-click"></td>
                </tr>
                <tr>
                    <td>Đặc biệt</td>
                    <td><input type="checkbox" name="sp-special"></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="submit" name="sp-add" value="Thêm"></td>
                </tr>
            </table>
            </form>



              <form action="admin.php?page=sanpham" method="post">
              <h3>update sản phẩm</h3>
            <table>
                <tr>
                    <td>Tên sản phẩm:</td>
                    <td><input type="text" name='sp-ten'></td>
                </tr>
                <tr>
                    <td>Đơn giá</td>
                    <td><input type="text" name="sp-gia"></td>
                </tr>
                <tr>
                    <td>Giảm giá</td>
                    <td><input type="text" name="sp-sale"></td>
                </tr>
                <tr>
                    <td>Ngày đăng</td>
                    <td><input type="text" name="sp-date"></td>
                </tr>
                <tr>
                    <td>Hình</td>
                    <td><input type="file" name="sp-hinh"></td>
                </tr>
                <tr>
                    <td>Mô tả</td>
                    <td>
                        <textarea name="sp-about"cols="30" rows="10"></textarea>
                    </td>
                </tr>
                <tr>
                    <td>Lượt xem</td>
                    <td><input type="text" name="sp-click"></td>
                </tr>
                <tr>
                    <td>Đặc biệt</td>
                    <td><input type="checkbox" name="sp-special"></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="submit" name="sp-add" value="Thêm"></td>
                </tr>
            </table>
            </form>

        </div>

        <div class="sp-show" >
            <form action="admin.php?page=sanpham" method = "post">
            <table border="1">
                <tr>
                    <td>Hình</td>
                    <td>Mã sản phẩm</td>
                    <td>Mã Loại</td> 
                    <td>Tên sản phẩm</td>
                    <td>Đơn giá</td>
                    <td>Sale</td>
                    <td>Ngày đăng</td>
                    
                    <td colspan="2" >Mô tả</td>
                    <td>Đặc biệt</td>
                    <td>Lượt xem</td>
                    <td>Sửa</td>
                    <td>Xóa</td>
                </tr>
                <tr>
                    <td> PHP here </td>
                    <td> PHP here </td>
                    <td> PHP here </td>
                    <td> PHP here </td>
                    <td> PHP here </td>
                    <td  > PHP here </td>
                    <td > PHP here </td>
                    <td colspan="2"> PHP here </td>
                    <td> PHP here </td>
                   
                    <td> PHP here </td>
                    <td> <a href="admin.php?page=sanpham?&ac=update&id='.???.'">Sua</a>   </td>
                    <td> <a href="admin.php?page=sanpham?&ac=delete&id='.???.'">Xoa</a></td>
                </tr>
            </table>
            </form>
        </div>
    </div>
</body>
</html>