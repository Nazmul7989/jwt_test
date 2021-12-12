<?php

use Firebase\JWT\JWT;
use Firebase\JWT\Key;


include 'vendor/autoload.php';

$key = "123456";
$payload = array(
    "name" => "Md Nazmul Hasan",
    "phone" => "01763636535",
    "address" => "Jhenaidah",
);

$encodedString = JWT::encode($payload, $key, 'HS256');


print_r($encodedString);



?>