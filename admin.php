











<?php
    require 'modules/admin/admin.php';

  if(isset($_GET['page'])){
      if($_GET['page']=='loai'){
        require 'modules/admin/loai.php';


      }elseif($_GET['page']=='sanpham'){
          require 'modules/admin/sanpham.php';
      }
      elseif($_GET['page']=='giohang'){
          require 'modules/admin/giohang.php';
      }
      elseif($_GET['page']=='binhluan'){
          require 'modules/admin/binhluan.php';
      }
      elseif($_GET['page']=='donhang'){
          require 'modules/admin/donhang.php';
      }
      elseif($_GET['page']=='khachhang'){
          require 'modules/admin/khachhang.php';
      }
      elseif($_GET['page']=='giasi'){
          require 'modules/admin/giasi.php';
      }
      elseif($_GET['page']=='hinh'){
          require 'modules/admin/hinh.php';
      }
      else{
          echo'ko co';
      }
      
  }
?>