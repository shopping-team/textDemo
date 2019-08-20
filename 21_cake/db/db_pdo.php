<?php 
/***
 * 数据库操作 实例化的PDO实例对象
 * 
 */ 
require_once('./../config/db_config.php');

class DB_{
    private static $pdo=null;
    public static function pdo(){
        if(self::$pdo!==null){
            return self::$pdo;
        }
        // $dsn="mysql:host=HOST;dbname=DBNAME;charset=utf8";
        try{
            $dsn=sprintf('mysql:host=%s;dbname=%s;charset=%s',HOST,DBNAME,CHARSET);
            $option=array(PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_ASSOC);
            return self::$pdo=new PDO($dsn,DBUSER,DBPW,$option);
        }catch(PDOException $e){
            exit($e->getMessage());
        }
    }
} 
// var_dump(db_::pdo());