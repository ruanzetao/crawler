<?php
set_time_limit(0);
//$url='http://dantri.com.vn/';
//$url='https://www.foody.vn/';
$url='https://mp3.zing.vn/';

$ch=curl_init();

//B2: set option

curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36');
curl_setopt($ch, CURLOPT_REFERER, 'https://www.google.com.vn/?hl=vi');
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10);
curl_setopt($ch, CURLOPT_ENCODING, '');


//TẠO HEADER GIẢ
$header=array();
//$header[]='Host: mp3.zing.vn';
$header[]='User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36';
$header[]='Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8';
$header[]='Accept-Encoding: gzip, deflate, br';
$header[]='Accept-Language: en-US,en;q=0.9,vi-VN;q=0.8,vi;q=0.7';
$header[]='Cache-Control: max-age=0';
$header[]='Connection: keep-alive';
//$header[]='Cookie: _ga=GA1.1.1042772557.1522817419; _gid=GA1.1.1721855545.1522817419; __RC=5; __R=3; __uif=__uid%3A1528178031906396215%7C__ui%3A-1%7C__create%3A1522817803; __tb=0; __utma=111872281.1042772557.1522817419.1522822052.1522822052.1; __utmc=111872281; __utmz=111872281.1522822052.1.1.utmcsr=(direct)|utmccn=(direct)|utmcmd=(none); __utmt_UA-33292184-1=1; __utmb=111872281.1.10.1522822052';

curl_setopt($ch, CURLOPT_HTTPHEADER, $header);

//=>dung de debug khi loi
//curl_setopt($ch, CURLOPT_HEADER, TRUE);

curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
curl_setopt($ch, CURLOPT_MAXREDIRS, TRUE);

//FAKE IP


$data=curl_exec($ch);

curl_close($ch);

echo $data;
?>