<?php
if ($_SERVER['REQUEST_METHOD']=="POST") {
	header('Content-Type:text/plain');
	// melakukan pengecekan, jika ada method POST maka tampilkan dengan print_r
	// jika ada file yang dikirim maka tampilkan file dengan print_r
	print_r($_POST) AND count($_FILES)>1 AND print_r($_FILES);
} else {
	// jika tidak ada method post maka tampilkan "Tidak ada method post !"
	echo "Tidak ada method post !";
}
?>