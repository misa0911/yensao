<!doctype html>
<html lang="en-US">

<head>
  <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
  <title>Sản Phẩm</title>

  
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






  <form action="admin.php?page=sanpham" method="post">
    <div id="responsive-form" class="clearfix">

      <div class="form-row">
        <div class="column-half">Mã Sản Phẩm<br><input name="ma_sp" placeholder="Auto" disabled></div>
        <div class="column-half">Tên Sản Phẩm<br> <input type="text" name="ten_sp"></div>
      </div>

      <div class="form-row">
        <div class="column-half">Đơn Giá <br> <input type="text" name="gia"></div>
        <div class="column-half">Giảm Giá<br><input type="text" name="giamgia" id=""></div>
      </div>

      <div class="form-row">

        <div class="column-half">Ngày Đăng <br><input type="date" name="ngaydang" id=""></div>
        <div class="column-half">Hình Ảnh<br> <input type="file" name="hinh" width="100px"></div>
        <div class="column-half">Loại Hàng<br>
          <select name="ma_loai" id="" style="padding:0.08rem 2rem; box-shadow:0 0 0 0.2px black;">

            <?php
                      $dsloai=loai_select_all();
                      foreach ($dsloai as $dsloai) {
                      extract($dsloai);
                      echo'
                          <option value="'.$ma_loai.'">'.$ten_loai.'</option>';
                      }
 ?>
          </select>

        </div>
      </div>

      <div class="form-row">
        <div class="column-half">Hàng Đặc Biệt <br> <input type="checkbox" name="dac_biet" id=""></div>


      </div>

      <div class="form-row">
        <div class="column-full"> </div>
      </div>

      <div class="form-row">
        <div class="column-full">Mô Tả<br> <textarea name="mota" id="" cols="62" rows="5"></textarea></div>
      </div>

      <div class="form-row">
        <div class="column-full"><input type="submit" value=" Thêm Mới" name="addnew" id=""></div>
      </div>
    </div>
  </form>
  <br>


  <table>
    <tr>
      <th>Mã SP</th>
      <th>Tên SP</th>
      <th>Đơn Giá</th>
      <th>Giảm Giá</th>
      <th>Hình Ảnh</th>
      <th>Loại Hàng</th>
      <th>Đặc Biệt</th>
      <th>Ngày Đăng</th>
      <th>Mô Tả</th>
      <th>Chỉnh sửa</th>
    </tr>
    <?php $dssp=san_pham_select_all();?>
    <?php foreach ($dssp as $dssp):?>
    <?php extract($dssp);?>
    <tr>
      <td>
        <?php echo $ma_san_pham?>
      </td>
      <td>
        <?php echo $ten_san_pham?>
      </td>
      <td>
        <?php echo $don_gia?>
      </td>
      <td>
        <?php echo $giam_gia?>
      </td>
      <td><img src="admin/img/<?php echo $hinh ?>" width="50px" height="50px">
        
      </td>
      <td>
        <?php echo $ma_loai?>
      </td>
      <td>
        <?php if($dac_biet==0){
    echo'<input type="checkbox" disabled>';
}else{
    echo'<input type="checkbox" checked disabled>';
  }?>
      </td>
      <td>
        <?php echo $ngay_dang?>
      </td>
      <td>
        <?php echo $mo_ta?>
      </td>
      <td><a href="admin.php?page=editproduct&id=<?php echo $ma_san_pham ?>">Edit</a>
        <a href="admin.php?page=qlsanpham&action=delete&id=<?php echo $ma_san_pham ?>">Delete</a></td>

    </tr>
    <tr>
    </tr>
    <?php endforeach;?>
  </table>
</body>

</html>