<?php

require_once $_SERVER['DOCUMENT_ROOT'] . "/projects/website/ars-crypter/app/libs/ARS_SHELL_CRYPT/ars.php";
$string = "";
$security = 1;

if (!empty($_GET["string"])){
    $string = $_GET["string"];
} if (!empty($_GET["security"])){
    $security = $_GET["security"];
}

echo '{"string":"' . $string . '","hash":"' . htmlspecialchars(encrypt($string, $security)) . '"}';