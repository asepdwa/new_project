<?php
function urut_kata($input)
{
    $input_perkata = explode(" ", $input);
    $jumlah_kata = count($input_perkata);
    
    foreach($input_perkata as $kata){
        $int = (int) filter_var($kata, FILTER_SANITIZE_NUMBER_INT);
        $arr[$int] = $kata;
    }

    ksort($arr);
    $terurut = implode(' ',$arr);
    echo $terurut . "<br/>";
}

urut_kata("ib2u in1i b3udi");
?>