<?php
$file = "README.md";
if (function_exists('curl_file_create')) {
    $cFile = curl_file_create($file);
} else {
    $cFile = '@'.realpath($file);
}
curl_setopt_array($ch,array(
		CURLOPT_RETURNTRANSFER=>true,
		CURLOPT_POST=>true,
		CURLOPT_POSTFIELDS=>array("nama"=>"Peter Jack Kambey","file"=>$cFile),
		CURLOPT_USERAGENT=>"Mozilla"
	));	

$out = curl_exec($ch);
curl_close($ch);
print $out;
