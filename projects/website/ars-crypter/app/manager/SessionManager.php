<?php

class SessionManager {

    /** @var array $data */
    private $data;

    public function __construct(array $data){
        $this->data = $data;
    }

    /**
     * @param $session
     *
     * @return bool
     */
    public static function is_registered($session) : bool {
        return isset($session["user"]);
    }

    /**
     * @return string
     */
    public function get_username() : string {
        return $this->data["username"];
    }

    /**
     * @return string
     */
    public function get_mail() : string {
        return $this->data["mail"];
    }
}