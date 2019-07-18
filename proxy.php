<?php
//header("Content-type:text/html;charset=utf-8");
//header("Content-type:text/plain;charset=utf-8");
header("Content-type:application/json;charset=utf-8");

define('ABSPATH', true);
require __DIR__ . '/config.php';

//$fivem_ip_port = 'http://107.0.0.1:30120/';
$fivem_ip_port = $config['fivem_ip_port'];

$url = '';

if($_GET['u'] === 'info'){
    $url = $fivem_ip_port . "info.json";
}elseif($_GET['u'] === 'players'){
    $url = $fivem_ip_port . "players.json";
}else{
    exit;
}

if($url !== ''){
    $headers = array(
        "Accept: application/json, text/javascript, */*; q=0.01",
        "Accept-Encoding: gzip, deflate, br",
        "Accept-Language: zh-TW,zh;q=0.9,en-US;q=0.8,en;q=0.7"
    );

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

    //curl_setopt($ch, CURLOPT_HEADER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
    curl_setopt($ch, CURLOPT_VERBOSE, true);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch ,CURLOPT_ENCODING , "gzip");
    //curl_setopt($ch, CURLOPT_USERAGENT, $agent);

    $result = @curl_exec($ch);
    curl_close($ch);



    echo $result;
}else{
    exit;
}
