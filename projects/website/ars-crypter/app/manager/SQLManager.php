<?php

class SQLManager {

    public const DATABASE_ARS = "ars";

    public const STATEMENT_DATA_FIND = 1;

    /**
     * @param string $db
     *
     * @return MySQLi
     */
    public static function connect_sql(string $db) : MySQLi {
        return new \MySQLi("*****", "*****", '*****', $db);
    }


    /**
     * @param string $statement
     *
     * @param string $db
     *
     * @param array $bind_param
     */
    public static function write_data(string $statement, string $db, array $bind_param) : void {
        self::connect_sql($db)->query($statement);
    }
    /**
     * @param string $statement
     *
     * @param string $db
     *
     * @param array $bind_param
     *
     * @return bool
     */
    public static function data_exist(string $statement, string $db,  $bind_param) : bool {
        $sql = self::connect_sql($db)->query($statement);
        return $sql->num_rows >= self::STATEMENT_DATA_FIND;
    }

    /**
     * @param string $statement
     *
     * @param string $db
     *
     * @param array $bind_param
     *
     * @return array|null
     *
     */
    public static function get_data(string $statement, string $db, array $bind_param) {
        $db = self::connect_sql($db);
        $sql = $db->query($statement);
        return $sql->fetch_assoc();
    }
}