<?php
namespace App\controller;
use App\model\CustomerModel;
include "src/model/CustomerModel.php";

class CustomerController
{
    public $customerModel;

    public function __construct()
    {
        //echo "da vao con trolller";
        //$this->customerModel = new CustomerModel();
        //var_dump("2 <br>");

    }

    public function getAll()
    {
        //var_dump("da denn day"); die();
        $test = new CustomerModel();
        //$customer = $this->customerModel->getAll();
        $this->customerModel=$test->getAll();
        $customer=$this->customerModel;
    }
}
$test=new CustomerController();
$test->getAll();
