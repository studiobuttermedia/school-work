<?php
$s1 = 10 ;
$s2 = 2 ;
$s3 = 40 ;

if ($s1 > $s2) {
    echo $s1. " lon hon ". $s2 ;
}
else{
    echo $s2. " lon hon ". $s1 ;
}
echo ('<br/>') ;

if ($s1 > $s2) {
    $max = $s1 ;
}
elseif ($s2 > $s3) {
    $max = $s2 ;
}
else {
    $max = $s3 ;
}

echo ('Max la '. $max);