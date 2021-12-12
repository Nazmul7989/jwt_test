<?php

use Firebase\JWT\JWT;
use Firebase\JWT\Key;


include 'vendor/autoload.php';

$key = "123456";
$jwt = "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJuYW1lIjoiTWQgTmF6bXVsIEhhc2FuIiwicGhvbmUiOiIwMTc2MzYzNjUzNSIsImFkZHJlc3MiOiJKaGVuYWlkYWgifQ.9_BcF7O1PFy_p47-VTat3yd2wLyexhqDk9iMusqcX2U";

$decodedData = JWT::decode($jwt, new Key($key, 'HS256'));

print_r($decodedData);



?>