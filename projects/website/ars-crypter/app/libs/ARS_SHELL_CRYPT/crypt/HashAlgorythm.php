<?php

include($_SERVER['DOCUMENT_ROOT'] . "/projects/website/ars-crypter/app/libs/ARS_SHELL_CRYPT/standard/StandardList.php");
include($_SERVER['DOCUMENT_ROOT'] . "/projects/website/ars-crypter/app/libs/ARS_SHELL_CRYPT/standard/StandardSecurity.php");

abstract class HashAlgorythm implements StandardSecurity, StandardList {

    /**
     * @return int
     */
    public function count() : int { return count(self::CHAR_LIST); }

    /**
     * @param string $f_char
     *
     * @param int $_
     *
     * @return string
     */
    public function hash_char(string $f_char, int $_) : string {
        $n_char = "";

        for ($i = 0; $i <= $this->count() - 1; $i++) {
            if (self::CHAR_LIST[$i] === $f_char) {
                if ($i >= $_) {
                    do {
                        if (isset(self::CHAR_LIST[$i + $_])) {
                            $n_char = self::CHAR_LIST[$i + $_];
                            break;
                        } elseif (isset(self::CHAR_LIST[($i + $_) - $this->count()])) {
                            $n_char = self::CHAR_LIST[($i + $_) - $this->count()];
                            break;
                        }
                    } while (true);
                    break;
                } elseif ($i < $_) {
                    do {
                        if (isset(self::CHAR_LIST[$i + $_])) {
                            $n_char = self::CHAR_LIST[$i + $_];
                            break;
                        }
                    } while (true);
                    break;
                }
            }
        }
        return $n_char;
    }

    /**
     * @param $r_char
     * 
     * @param int $_
     * 
     * @return string
     */
    public function unhash_char($r_char, int $_) : string {
        $n_char = "";

        for ($i = 0; $i <= $this->count() - 1; $i++) {
            if (self::CHAR_LIST[$i] === $r_char) {
                if ($i >= $_) {
                    do {
                        if (isset(self::CHAR_LIST[$i - $_])) {
                            $n_char = self::CHAR_LIST[$i - $_];
                            break;
                        }
                    } while (true);
                    break;
                } elseif ($i < $_) {
                    do {
                        if (isset(self::CHAR_LIST[$i - $_])) {
                            $n_char = self::CHAR_LIST[$i - $_];
                            break;
                        } elseif (isset(self::CHAR_LIST[($i - $_) + $this->count()])) {
                            $n_char = self::CHAR_LIST[($i - $_) + $this->count()];
                            break;
                        }
                    } while (true);
                    break;
                }
            }
        }
        return $n_char;
    }
}