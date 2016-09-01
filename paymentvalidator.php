<?php
$filename = "resp.txt";//esta es la ubicación local
$handle = fopen($filename, 'a+');
$obj = $_GET;
print_r($obj);
//$data = json_decode(file_get_contents('php://input'));
$data = $_GET;
fwrite($handle, date("Y-m-d H:i:s ---- ").print_r($data, true).PHP_EOL);

fclose($handle);
?>