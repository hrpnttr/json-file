<?php

	header('Content-Type: application/json');

	$json = file_get_contents('data.json');
	// $data = json_decode($json, true);

	echo $json;

	// foreach ($data as $item)
	// {
	// 	echo "[" . '<br>';
	// 	echo $item['kode'] . '<br>' . $item['bukaSmb'] . '<br>' . $item['nomor'] . '<br>' . $item['nama_lengkap'] . '<br>' . $item['jalur_seleksi'] . '<br>' . $item['bayar_daftar'] . '<br>' . $item['daftar_ulang'] . '<br>' . $item['nim'] . '<br>' . $item['nama_sekolah'] . '<br>';
	// }

?>