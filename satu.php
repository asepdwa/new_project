<?php
$input_1 = 12.00;
$input_2 = 13.00;
$speed_1 = 7; // 7m/s
$speed_2 = 10; // 10m/s

$difference = ($input_2-$input_1)*3600;
$distance_1 = $difference*$speed_1;
$distance_2 = 0;

while($distance_1 != $distance_2)
{
    $distance_1 += $speed_1;
    $distance_2 += $speed_2;
}

if($distance_1 == $distance_2)
{
    $time = $distance_2 / $speed_2;
    $time += $input_2*3600;
    
    $hours = floor($time / 3600);
    $mins = floor($time / 60 % 60);
    $secs = floor($time % 60);

    echo "Nana Mulai Berangkat Pada Pukul : ", $input_1, " || Dengan Kecepatan : ", $speed_1, "m/detik<br/>", "Angela Mulai Berangkat Pada Pukul : ", $input_2, " || Dengan Kecepatan : ",
    $speed_2, "m/detik<br/> Nana dan Angela bertemu dijalan pada pukul : ", $hours, ":", $mins, ":", $secs;
}
?>