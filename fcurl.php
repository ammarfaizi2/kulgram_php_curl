<?php
function curl($url,$post=null)
{
	$ch = curl_init($url);
	$op = array(
			CURLOPT_RETURNTRANSFER=>true,
			CURLOPT_SSL_VERIFYPEER=>false,
			CURLOPT_USERAGENT=>"Mozilla/5.0 (X11; Ubuntu; Linux i686; rv:46.0) Gecko/20100101 Firefox/46.0",
			CURLOPT_COOKIEJAR=>getcwd()."/cookie2.txt",
			CURLOPT_COOKIEFILE=>getcwd()."/cookie2.txt",
		);
	if ($post!==null) {
		$op[CURLOPT_POST] = true;
		$op[CURLOPT_POSTFIELDS] = $post;
	}
	curl_setopt_array($ch,$op);
	$out = curl_exec($ch);
	$err = curl_errno($ch) and $out = $err;
	curl_close($ch);
	return $out;
}