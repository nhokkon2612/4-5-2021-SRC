<?php
use  App\controller\CustomerController;
require_once __DIR__ . '/vendor/autoload.php';

//var_dump("da denday");
$page= isset($_REQUEST['page'])? $_REQUEST['page'] : '';
$customerController = new CustomerController();
?>
<a href="index.php?page=list-customer">danh sach khac hang</a>

<?php
    switch ($page){
        case 'list-customer':
            $customerController->getAll();
            break;
        default;
    }

