<?php

//fungsi sort yaitu mengurutkan variabel supaya lebih rapih misalnya mengurutkan angka dari yang terbesar ke yang terkecil atau sebaliknya
$data = array(1,3,2,4,7,8,6,5,9,10);
sort($data);
for($x=0;$x<=10;$x++){
    echo current($data)."<br>";
    next($data);
}
?>