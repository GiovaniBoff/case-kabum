<?php
require_once "../../config/DatabaseConfig.php";
require_once "../../domain/model/User.php";
require_once "../../data/repository/UserRepository.php";
require_once "../../data/usecase/createUser.php";
require_once "../../data/usecase/readUser.php";
require_once "../../data/usecase/updateUser.php";
require_once "../../data/usecase/deleteUser.php";
//instancia as classes
$createUser = new CreateUser();
$readUser = new ReadUser();
$updateUser = new UpdateUser();
$deleteUser = new DeleteUser();

//pega todos os dados passado por POST
$input = filter_input_array(INPUT_POST);

//se a operação for gravar entra nessa condição
if (isset($_POST['cadastrar'])) {

    $createUser->create($input);

    header("Location: ../../");
}
// se a requisição for editar
else if (isset($_POST['editar'])) {

    $updateUser->update($input);

    header("Location: ../../");
}
// se a requisição for deletar
else if (isset($_GET['del'])) {

    $deleteUser->delete($_GET['del']);

    header("Location: ../../");
} else {
    header("Location: ../../");
}