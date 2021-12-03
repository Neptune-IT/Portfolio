<?php

require_once $_SERVER['DOCUMENT_ROOT'] . "/projects/website/ars-crypter/app/libs/ARS_SHELL_CRYPT/ars.php";
$hash = "";
$security = 1;

if (!empty($_GET["hash"])) {
    $hash = htmlspecialchars($_GET["hash"]);
} if (!empty($_GET["security"])) {
    $security = (int)$_GET["security"];
}

echo '{"hash":"' . $hash . '","string":"' . decrypt($hash, $security) . '"}';
