<?php
$ch = curl_init("http://yessrilanka.com/kulgram/tujuan.php");
curl_setopt_array($ch,array(
		CURLOPT_RETURNTRANSFER=>true
	));	
$out = curl_exec($ch);
curl_close($ch);
print $out;
