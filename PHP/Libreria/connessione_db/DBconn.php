<?php

class DBconn
{
    private static PDO $db;

    public static function getDB(array $config) : PDO
    {
        self::$db = new PDO($config['dns'], $config['username'], $config['password'], $config['options']);
        return self::$db;
    }
}