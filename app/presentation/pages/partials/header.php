<?php
define('ROOT_PATH', dirname(__FILE__));
require_once "../../../config/DatabaseConfig.php";
include_once "../../../domain/model/Customer.php";
include_once "../../../data/repository/CustomerRepository.php";
include_once "../../../data/repository/AddressRepository.php";
include_once "../../../data/usecase/address/CreateAddress.php";
include_once "../../../data/usecase/customer/ReadCustomer.php";
include_once "../../../data/usecase/customer/CreateCustomer.php";
include_once "../../../data/usecase/customer/UpdateCustomer.php";
include_once "../../../data/usecase/customer/DeleteCustomer.php";


$customer = new Customer;

$readCustomer = new ReadCustomer;
$createCustomer = new CreateCustomer;
$updateCustomer = new UpdateCustomer;
$deleteCustomer = new DeleteCustomer;
$customers = $readCustomer->read();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>CRUD</title>
    <style>
        .menu,
        thead {
            background-color: #bbb !important;
        }

        .row {
            padding: 10px;
        }
    </style>

</head>

<body>