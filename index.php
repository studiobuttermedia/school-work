<?php
/* $so1 = 10 ;
$so2 = 20 ;
$so3 = 50 ;

$max = $so1 ;
if($so1 < $so2) {$max = $so2 ;}
if($so1 < $so3) {$max = $so3 ;}

echo 'Số lớn nhất trong 3 số '.$so1.", ".$so2.", ".$so3." là ".$max ; */


function ten($ten)
{
$ten = " Ta Nguyen Khang" ;
return $ten ;
}
$chuoi_goc = " Chính là tên em " ;
echo ten($chuoi_goc) ;
echo $chuoi_goc ;
echo('<br/>') ;


function tinh_dien_tich($a,$b)
{
$s = $a * $b ;
return $s ;
}
echo ('Diện tích là ') ;
echo tinh_dien_tich(2,5) ;
echo('<br/>') ;

function tinh_chu_vi($g,$h)
{
$d = ($g + $h) * 2 ;
return $d ;
}
echo ('Chu vi là ') ;
echo tinh_chu_vi(3,4) ;
echo('<br/>') ;


function tim_x($y,$z) {
    $result = -($y) / $z;
    return $result ;
}
$y = -50 ;
$z = 100 ;
$kq = tim_x($y,$z) ;
echo ($y.'x + '.$z.' = 0'.'<br/>') ;
echo ('=> x = '.$kq.'<br/>') ;
echo ('Vậy Kết quả phương trinh bật nhất là '.$kq) ;

echo ('<br/>') ;

$quanity = 10 ;
$money = 20000 ;

function thanhtien_3($quantity,$money) {
    $bm = $quantity * $money ;
    return $bm ;
}
$tien = thanhtien_3($quanity,$money) ;

function tinh_thue_3($tien){
    $br = $tien * (1/10) ;
    return $br ;
}
$thue = tinh_thue_3($tien) ;

function total($thue,$tien) {
    $fz = $thue + $tien ;
    return $fz ;
}
$total = total($thue,$tien) ;

echo ('<br/>') ;
echo('Số lượng hàng cấm của bạn là: '.$quanity.'<br/>') ;
echo('Số tiền hàng cấm là: '.$money.'<br/>') ;
echo('Thành tiền là: '.$tien.'<br/>') ;
echo('Số thuế hiện nay là: 10% '."(".$thue.")".'<br/>') ;
echo('Tổng số tiền của hàng cấm là: '.$total) ;


