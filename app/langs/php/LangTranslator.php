<?php

require_once $_SERVER["DOCUMENT_ROOT"] . "/Portfolio/app/langs/php/countries/FR.php";
require_once $_SERVER["DOCUMENT_ROOT"] . "/Portfolio/app/langs/php/countries/EN.php";
require_once $_SERVER["DOCUMENT_ROOT"] . "/Portfolio/app/langs/php/countries/SPA.php";

/**
 * @param string $identifier
 *
 * @param string $language
 *
 * @return string
 */
function translate(string $identifier, string $language) : string {
    switch (strtolower($language)){
        case "french":
            return FR::MESSAGES[$identifier];
        case "english":
            return EN::MESSAGES[$identifier];
        case "spanish":
            return SPA::MESSAGES[$identifier];
        default:
            return EN::MESSAGES[$identifier];
    }
}