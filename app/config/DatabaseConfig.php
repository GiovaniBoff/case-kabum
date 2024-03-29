<?php

class DatabaseConnection
{

    public static $instance;

    public static function getInstance()
    {
        try {
            if (!isset(self::$instance)) {
                self::$instance = new PDO('mysql:host=db;dbname=db;port=3306', 'root', 'root', array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
                self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                self::$instance->setAttribute(PDO::ATTR_ORACLE_NULLS, PDO::NULL_EMPTY_STRING);
            }

            return self::$instance;
        } catch (PDOException $e) {
            die("ERROR: Could not connect. " . $e->getMessage());
        }

    }

}