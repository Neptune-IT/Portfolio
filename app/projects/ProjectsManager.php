<?php

require_once $_SERVER["DOCUMENT_ROOT"] . "/app/projects/Projects.php";

function __load_projects(){
    $projects = [
        "ARS-Crypter" => [
            "description" => "ARS Crypter is my own cryptage system based on Caesar's Cipher.",
            "link" => "https://github.com/Neptune-IT/ARS_SHELL_CRYPT",
            "statement" => "Finish"
        ],
        "Olympus" => [
            "description" => "Olympus is a chat-box website that I made during my free time.",
            "link" => "https://github.com/Neptune-IT/Olympus-rewrite",
            "statement" => "In Development"
        ],
        "Séléné" => [
            "description" => "Séléné is a database table data extractor written in Python3.",
            "link" => "https://github.com/Neptune-IT/Selene",
            "statement" => "Finish"
        ],
        "Kleptes" => [
            "description" => "Kleptes is a free and open system to grab ip and stock it in database written in PHP 7.4.",
            "link" => "https://github.com/Neptune-IT/Kleptes",
            "statement" => "Finish"
        ]
    ];
    foreach ($projects as $name => $data){
        new Projects($name, $data["description"], $data["link"], $data["statement"]);
    }
}