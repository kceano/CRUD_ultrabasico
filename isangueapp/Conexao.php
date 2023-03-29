<?php

class Conexao{

    private static $instance;

    private function __construct()
    { }

    public static function getConexao(){

        if (is_null(self::$instance)){
            self::$instance = new PDO('mysql:host=sisinfobd.mysql.dbaas.com.br;dbname=sisinfobd', 'sisinfobd', 'SisInfo22!');
            self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            self::$instance->setAttribute(PDO::ATTR_ORACLE_NULLS, PDO::NULL_EMPTY_STRING);
            self::$instance->exec('set names utf8');
        }
        return self::$instance;
    }

}