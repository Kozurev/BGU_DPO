<?php

/**
 * Класс отвечающий за соединение с базой данных
 * Данные для соединения берутся из стандарного файла конфигурации /config.php
 * Данный класс реализован по принципу шаблона проектирования Singleton для избежания возможности
 * создания множественного подключения к базе данных
 *
 * @author BadWolf
 * @date 06.02.2019
 * @version 2.0.1
 *
 * Class DB
 */
class DB
{

    /**
     * Объект PDO подключения к базе данных
     *
     * @var PDO
     */
	private static $_db = null;


	private function __construct(){}
    private function __clone(){}


    /**
	 * Метод для установления соединения с базой данных средствами драйвера PDO
     *
	 * @return PDO
	 */
	public static function instance()
	{
        if( self::$_db === null )
        {
            global $CFG;
            $pdoString = "mysql:";
            $pdoString .= "host=$CFG->dbhost;";
            $pdoString .= "dbname=" . $CFG->dbname;
            self::$_db = new PDO( $pdoString, $CFG->dbuser, $CFG->dbpass );
            self::$_db->query( "SET CHARSET UTF8" );
        }

        return self::$_db;
	}
}