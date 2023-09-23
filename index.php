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
$chuoi_goc = "Đây là tên em " ;
echo ten($chuoi_goc) ;
echo "<br/>";
echo $chuoi_goc ;
echo('<br/>') ;


function tinh_dien_tich($a,$b)
{
$s = $a * $b ;
return $s ;
}
echo tinh_dien_tich(2,5) ;
echo('<br/>') ;

function tinh_chu_vi($g,$h)
{
$d = ($g + $h) * 2 ;
return $d ;
}
echo tinh_chu_vi(3,4) ;
echo('<br/>') ;


function tim_x($y,$z) {
    $result = -($y) / $z;
    return $result ;
}
$kq = tim_x(50,100) ;
echo ($y.'x+'.$z.'= 0'.'<br/>') ;