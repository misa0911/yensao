<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Loai</title>
</head>
<body>
    <div class="loai-header">
      <h1>Loại sản phẩm</h1>
    </div>

    <div class="loai-body">
        <div class="loai-add">

          <form action="admin.php?page=loai" method='post'>


<!-- php -->
<?php
require 'dao/loai.php';
if(isset($_POST['add'])){
    if($_POST['add']){
        $ten_loai=$_POST['ten_loai'];   
        loai_insert($ten_loai);
        }     
}
if(isset($_GET['del'])&&isset($_GET['id'])){
    $ma_loai=$_GET['id'];
    loai_delete($ma_loai);}

    if(isset($_POST['update'])){
        if($_POST['update']){
            $ten_loai=$_POST['ten_loai'];
            $id=$_POST['ma_loai'];
            loai_update($id,$ten_loai);
        }
    }



    ?>


            <table>
                    <h3>Thêm Loại</h3>
                    <tr>Tên Loại:</tr>
                    <tr><input type="text" name="ten_loai"></tr>
                    <input type="submit" name='add' value="add">
            </table>
          </form>








           <form action="admin.php?page=loai.php" method='post'>
            <table>
                    <h3>Sửa</h3>
                    <tr>Tên Loại:</tr>
                    <tr><input type="text" name="ten-loai"></tr>
                    <input type="submit" name='update' value="update">
            </table>
          </form>
    </div>

        <div class="loai-show">
        <table border="1">
              <tr>
                  <td>Mã Loại</td>
                  <td>Tên Loại</td>
                  <td>Chỉnh Sửa</td>
                
              </tr>

              <tr>
              <?php
                        $loai=loai_select_all();
                        $i=0;
                        foreach ($loai as $loai) {
                            $i+=1;
                            extract($loai);                          
                            $sua="<a href='admin.php?page=loai&edit=1&id=$ma_loai'&page=qldanhmuc>Edit</a>";
                            $xoa="<a href='admin.php?page=loai&del=1&id=$ma_loai'&page=qldanhmuc>Delete</a>";
                            echo '<tr>
                            
                                        <td> '.$ma_loai.'</td>
                                        <td>'.$ten_loai.'</td>
                                        <td>'.$sua.''.$xoa.'</td>
                                     
                                  </tr>';
                        }
                    ?>
              </tr>
            </table>
        </div>
    </div>
</body>
</html>