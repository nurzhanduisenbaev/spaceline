<?php
class Db{
    public static function getConnection(){
        $paramasPath = ROOT.'/config/db_params.php';
        $params = include($paramasPath);

        $dsn = "mysql:host={$params['host']};dbname={$params['dbname']}";
        $db = new PDO($dsn, $params['user'], $params['password']);
        $db->exec("set names utf8");
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        return $db;
    }

}
?>