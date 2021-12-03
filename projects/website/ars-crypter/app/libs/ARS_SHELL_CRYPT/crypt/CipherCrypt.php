<?php

require_once $_SERVER['DOCUMENT_ROOT'] . "/projects/website/ars-crypter/app/libs/ARS_SHELL_CRYPT/security/SecurityHandler.php";

class CipherCrypt extends SecurityHandler {

    /** @var string $plaintext */
    private $plaintext;

    /** @var int $sec */
    private $sec;

    /** @var array $crypt_data */
    private $crypt_data;

    public function __construct(string $plaintext, int $sec, $crypt_data = ["encrypted" => "", "decrypted" => ""]){
        $this->plaintext = $plaintext;
        $this->sec = $sec;
        $this->crypt_data = $crypt_data;
        $this->serialize_data($sec, strlen($plaintext));
    }

    /**
     * @return string
     */
    public function encrypt() : string {
        $sec = $this->sec_data;
        $encrypt = "";

        for ($i = 0; $i < strlen($this->plaintext); $i++){
            $encrypt .= $this->hash_char($this->plaintext[$i], $sec["_"]);
        }
        return $this->crypt_data["encrypted"] = $encrypt . $sec["add"] . $sec["f_break"] . $sec["s_break"];
    }

    /**
     * @return string
     */
    public function decrypt() : string {
        $sec = $this->sec_data;
        $hash = explode("`", $this->crypt_data["encrypted"])[0];
        $decrypt = "";

        for ($i = 0; $i < strlen($hash); $i++){
            $decrypt .= $this->unhash_char($hash[$i], $sec["_"]);
        }
        return $this->crypt_data["decrypted"] = $decrypt;
    }
}