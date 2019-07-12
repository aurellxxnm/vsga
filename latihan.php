<?php
function hitungLuas($phi, $diameter)
{
	$jari_jari = $diameter / 2;
	$hasil = ($phi*$jari_jari*$jari_jari) / 2;
	return $hasil;
}

echo "Luas setengah lingkaran yang berdiameter 10 cm adalah ".hitungLuas(3.14, 10);
?>