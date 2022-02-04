<?php
$aplikasi[1] = 'gtAkademis';
$aplikasi[2] = 'gtFinansi';
$aplikasi[3] = 'gePerizinan';
$aplikasi[4] = 'eCampuz';
$aplikasi[5] = 'eOviz';

$aplikasiLength = count($aplikasi);
$i = 1;
echo "Daftar Data Array </br>";
while ($aplikasiLength > $i) {
    echo "</br>";
    echo "$aplikasi[$i]";
    $i++;
}
