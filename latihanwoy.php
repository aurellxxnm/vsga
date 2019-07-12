<?php
function hitungLuas($panjang, $lebar)
{
	$hasil= $panjang*$lebar;
	return $hasil;
}


echo "Luas persegi panjang dengan panjang 10 dan lebar 6.5 adalah ".hitungLuas(10, 6.5);
?>