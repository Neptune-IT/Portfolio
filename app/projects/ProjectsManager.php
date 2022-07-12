<?php

require_once $_SERVER["DOCUMENT_ROOT"] . "/Portfolio/app/projects/Projects.php";

function __load_projects(){
    $projects = [
        "ARS-SHELL-CRYPT" => [
            "description" => "ARS-SHELL-CRYPT is a modified caesar's-cipher-based encrypt system written in C++.",
            "link" => "https://github.com/Neptune-IT/ARS_SHELL_CRYPT",
            "statement" => "Completed"
        ],
        "Lets-Freerun" => [
            "description" => "Lets-Freerun is a website which gather a lot of parkour spots around the world.",
            "link" => "https://github.com/Neptune-IT/Lets-Freerun",
            "statement" => "In Development"
        ],
        "Iris" => [
            "description" => "Iris is an instant chat made with python3 based on client / server / client communication.",
            "link" => "https://github.com/Neptune-IT/Iris",
            "statement" => "In Development"
        ],
        "Olympus" => [
            "description" => "Olympus is a chat-box website that I made during my free time.",
            "link" => "https://github.com/Neptune-IT/Olympus-rewrite",
            "statement" => "In Development"
        ],
        "Séléné" => [
            "description" => "Séléné is a database table data extractor written in Python3.",
            "link" => "https://github.com/Neptune-IT/Selene",
            "statement" => "Completed"
        ],
        "Kleptes" => [
            "description" => "Kleptes is a free and open system to grab ip and stock it in database written in PHP 7.4.",
            "link" => "https://github.com/Neptune-IT/Kleptes",
            "statement" => "Completed"
        ]
    ];
    foreach ($projects as $name => $data){
        (new Projects($name, $data["description"], $data["link"], $data["statement"]))->push();
    }
}