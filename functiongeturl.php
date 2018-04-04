<?php
set_time_limit(0);

$url='https://mp3.zing.vn/';

echo get_data($url);

$proxy=trim(file_get_contents('proxy.txt'));

function get_data($link){
	$ch=curl_init();

	curl_setopt($ch, CURLOPT_URL,$link );
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36');
	curl_setopt($ch, CURLOPT_REFERER, 'https://www.google.com.vn/?hl=vi');
	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 20);
	curl_setopt($ch, CURLOPT_ENCODING, '');
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
	curl_setopt($ch, CURLOPT_MAXREDIRS, 5);
	//curl_setopt($ch, CURLOPT_PROXY, "185.71.80.3:8888");
	//IP:PORT

	//curl_setopt($ch, CURLOPT_PROXYTYPE, CURLPROXY_HTTP);

}
?>