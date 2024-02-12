<?php
require_once "../../config/DatabaseConfig.php";
require_once "../../domain/model/Customer.php";
require_once "../../domain/model/Address.php";
require_once "../../data/repository/CustomerRepository.php";
require_once "../../data/repository/AddressRepository.php";
require_once "../../data/usecase/address/CreateAddress.php";
require_once "../../data/usecase/customer/CreateCustomer.php";
require_once "../../data/usecase/customer/ReadCustomer.php";
require_once "../../data/usecase/customer/UpdateCustomer.php";
require_once "../../data/usecase/customer/DeleteCustomer.php";
//instancia as classes
$createCustomer = new CreateCustomer();
$readCustomer = new ReadCustomer();
$updateCustomer = new UpdateCustomer();
$deleteCustomer = new DeleteCustomer();

//pega todos os dados passado por POST
$input = filter_input_array(INPUT_POST);

//se a operação for gravar entra nessa condição
if (isset($_POST['cadastrar'])) {

    $createCustomer->create($input);

    header("Location: ../../");
}
// se a requisição for editar
else if (isset($_POST['editar'])) {

    $updateCustomer->update($input);

    header("Location: ../../");
}
// se a requisição for deletar
else if (isset($_GET['del'])) {

    $deleteCustomer->delete($_GET['del']);

    header("Location: ../../");
} else {
    header("Location: ../../");
}