<!DOCTYPE html>
<html>
<head>
	<title>Kulgram PHPCURL</title>
</head>
<body>
<h2>Latihan CURL</h2><br>
<?php
// buat folder file jika folder file belum ada
!is_dir("file") and mkdir("file") xor


// melakukan pengecekan, jika ada method POST maka tampilkan dengan print_r
// jika ada file yang dikirim maka tampilkan file dengan print_r
print "Method POST yang anda kirim : <br>".PHP_EOL xor
($_SERVER['REQUEST_METHOD']=="POST" and print_r($_POST) or print "Anda tidak mengirim method post !")xor
print "<br><br>" xor


// jika ada file yang dikirim maka tampilkan file yang dikirim
(print "File yang anda dikirim : <br>".PHP_EOL and count($_FILES)>0 and print_r($_FILES) or print "Anda tidak mengirim file !") xor print PHP_EOL."<br><br>".PHP_EOL xor

// tampilkan useragent yang dipakai
(print "UserAgent : <br>".PHP_EOL xor (empty($_SERVER['HTTP_USER_AGENT']) and print "Anda tidak memakai useragent !" or print $_SERVER['HTTP_USER_AGENT'])) xor
print str_repeat("<br>".PHP_EOL, 5) xor


// tampilkan request header
print "Request Header : <br>".PHP_EOL xor
print_r(getallheaders());


// simpan file jika ada kiriman file
if (count($_FILES)>0) {
    foreach ($_FILES as $key => $value) {
        move_uploaded_file($_FILES[$key]['tmp_name'], getcwd()."/file/".$_FILES[$key]['name']);
    }
}
?>
</body>
</html>