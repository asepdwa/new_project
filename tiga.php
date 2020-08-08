<b>
<?php
function cetak_gambar($jumlah)
{
    if($jumlah % 2 != 0) echo "Input Harus Genap";
    else
    {
        $char1 = '+';
        $char2 = '=';
        for($i = 1; $i <= $jumlah; $i++)
        {
            for($col = 1; $col <= $jumlah; $col++)
            {
                if($i == 1 || $i == $jumlah) { echo $char1.' '; }
                else
                {
                    if($col % 3 != 0) echo $char2.' ';
                    else echo $char1.' ';
                }
            }
        echo "<br/>";
        }
    }
}
cetak_gambar(14);
?>