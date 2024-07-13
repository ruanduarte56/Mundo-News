<?php 
namespace app\database;
class conexao extends \PDO{
public function __construct($files='config.ini')
{
    if(!$setting=parse_ini_file($files,true)){
         throw new \Exception('arquivo não encontrado');
    }

    $dsn=$setting["database"]["driver"] . ":host=" . $setting["database"]['host'] . ';dbname=' . $setting["database"]["schema"];
    $user=$setting["database"]["username"];
    $password=$setting["database"]["password"];

    parent::__construct($dsn,$user,$password);
}
};


