<?php

require_once $_SERVER['DOCUMENT_ROOT'] . "/projects/website/ars-crypter/app/manager/SQLManager.php";

/**
 * @param string $input_name
 *
 * @return bool
 */
function check_acc_name(string $input_name) : bool {
    return SQLManager::data_exist("SELECT * from users WHERE pseudo = '" . $input_name . "'", SQLManager::DATABASE_ARS, []);
}

/**
 * @param string $input_email
 *
 * @return bool
 */
function check_email(string $input_email) : bool {
    return SQLManager::data_exist("SELECT * from users WHERE email = '" . $input_email . "'", SQLManager::DATABASE_ARS, []);
}