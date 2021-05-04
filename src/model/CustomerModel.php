<?php
namespace App\model;
require_once "DBConnect.php";

class CustomerModel
{
    public $customer;
    public function __construct()
    {

        $db= new DBConnect();
        $this->customer=$db->connectDB();
    }
    public function getAll(){
        //var_dump("koeeee");die();
        $sql=" SELECT * FROM customers WHERE city='NYC'";
        //var_dump("koeeee");die();
        $stmt=$this->customer->query($sql);
        //$stmt=$this->customer->prepare($sql);
        //var_dump("koee56565959");die();
        //$stmt->execute();
        //var_dump("koeeee");die();
        //return $stmt->fetchAll();
        var_dump( $stmt->fetchAll());
    }
}
$test = new customerModel();
$test ->getAll();