<?php
require_once 'pdo.php';

/**
 * Thêm loại mới
 * @param String $ten_loai là tên loại
 * @throws PDOException lỗi thêm mới
 */
function san_pham_insert($ten_san_pham,$ma_loai,$don_gia,$giam_gia,$ngay_dang,$hinh,$mo_ta,$dac_biet){
    $sql = "INSERT INTO san_pham ( ) VALUES(?,?,?,?,?,?,?,?)";
    pdo_execute($sql,$ten_san_pham,$ma_loai,$don_gia,$giam_gia,$ngay_dang,$hinh,$mo_ta,$dac_biet);
}
/**
 * Cập nhật tên loại
 * @param int $ma_loai là mã loại cần cập nhật
 * @param String $ten_loai là tên loại mới
 * @throws PDOException lỗi cập nhật
 */
function san_pham_update($ten_san_pham,$ma_loai,$don_gia,$giam_gia,$ngay_dang,$hinh,$mo_ta,$dac_biet){
    $sql = "UPDATE san_pham SET ten_san_pham=?,ma_loai=?,don_gia=?,giam_gia=?,ngay_dang=?,hinh=?,mo_ta=?,dac_biet=? WHERE ma_san_pham=?";
    pdo_execute($sql,$ten_san_pham,$ma_loai,$don_gia,$giam_gia,$ngay_dang,$hinh,$mo_ta,$dac_biet);
}
/**
 * Xóa một hoặc nhiều loại
 * @param mix $ma_loai là mã loại hoặc mảng mã loại
 * @throws PDOException lỗi xóa
 */
function san_pham_delete($ma_san_pham){
    $sql = "DELETE FROM san_pham WHERE ma_san_pham=?";
    if(is_array($ma_san_pham)){
        foreach ($ma_san_pham as $masp) {
            pdo_execute($sql, $masp);
        }
    }
    else{
        pdo_execute($sql, $ma_san_pham);
    }
}
/**
 * Truy vấn tất cả các loại
 * @return array mảng loại truy vấn được
 * @throws PDOException lỗi truy vấn
 */
function san_pham_select_all(){
    $sql = "SELECT * FROM san_pham ORDER BY ma_san_pham ASC";
    return pdo_query($sql);
}
/**
 * Truy vấn một loại theo mã
 * @param int $ma_loai là mã loại cần truy vấn
 * @return array mảng chứa thông tin của một loại
 * @throws PDOException lỗi truy vấn
 */
function san_pham_select_by_id($ma_san_pham){
    $sql = "SELECT * FROM san_pham WHERE ma_san_pham=?";
    return pdo_query_one($sql, $ma_san_pham);
}
/**
 * Kiểm tra sự tồn tại của một loại
 * @param int $ma_loai là mã loại cần kiểm tra
 * @return boolean có tồn tại hay không
 * @throws PDOException lỗi truy vấn
 */
function san_pham_exist($ma_san_pham){
    $sql = "SELECT count(*) FROM san_pham WHERE ma_san_pham=?";
    return pdo_query_value($sql, $ma_san_pham)>0;
}
//menu đa cấp
//function Menu($parent = 0,$space = '---', $trees = NULL){ 
//        if(!$trees){ $trees = array(); }
//	$sql = mysql_query("SELECT * FROM loai WHERE parent = ".intval($parent)." ORDER BY tenloai"); 
//	while($rs = mysql_fetch_assoc($sql)){ 
//		$trees[] = array('ma_loai'=>$rs['ma_loai'],'tenloai'=>$space.$rs['tenloai']); 
//		$trees = Menu($rs['ma_loai'],$space.'---',$trees); 
//	} 
//	return $trees; 
//} 