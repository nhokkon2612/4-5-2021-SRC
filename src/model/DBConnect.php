<?php
namespace App\model;
use PDO;

class DBConnect
{
    protected $dsn;
    protected $username;
    protected $password;
    public function __construct()
    {
        $this->dsn='mysql:host=localhost;dbname=Haha';
        $this->username="root";
        $this->password="123456";
    }
    public function connectDB(){
        try {
                return new PDO($this->dsn,$this->username,$this->password);
        }catch (\PDOException $e){
            echo "okeeeeeeeeeeeeeeeeeeeeeeeeeee";
        }
    }
}
/*$tien = new DBConnect();
$tien->connectDB();*/