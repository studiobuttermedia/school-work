<?php
$a = 123 ;
$b = 456 ;
$c = 789 ;
$so = array (123,456,789) ; //item has Value = 123

$monhoc = array ('van', 'toan', 'anh', 'hoa') ;

foreach($monhoc as $k => $n) {
    echo $k. " ". $n ;
    echo ('<br/>') ;
}

echo ('<br/>') ;

$profile = array(
    'name' => 'Ta Nguyen Khang',
    'birth' => '05/07/2005',
    'job' => 'hoc sinh ' ,
    'email'=> 'bebosua05@gmail.com'
    );
foreach($profile as $o => $r) {
    echo $o. " ". $r ;
    echo ('<br/>') ;
}

echo ('<br/>') ;
$video = array (
    'title' => ' ten video',
    'url' => ' https://youtube.com/shorts/ebUyVh1fDqs?feature=share',
    'created_at' => ' ngay tao video',
    'author' => ' Low G'
);
foreach($video as $w => $ml) {
    echo $w. "". $ml;
    echo ('<br/>') ;
}

echo ('<iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/ebUyVh1fDqs?si=NP3MGr3zVuHm65sJ&autoplay=1&controls=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>') ;