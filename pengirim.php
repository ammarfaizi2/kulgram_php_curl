<?php
// memulai sesi curl
$ch = curl_init("http://localhost/curl/tujuan.php");

// mengatur curl
curl_setopt_array($ch,array(
		CURLOPT_RETURNTRANSFER=>true
	));	

// menjalankan curl
$out = curl_exec($ch);

// tampilkan pesan error jika terjadi error
$err = curl_errno($ch) and print $err;

// menutup curl
curl_close($ch);

// tampilkan hasil curl
print $out;