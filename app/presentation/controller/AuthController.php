<?php
session_start();
include "../../config/DatabaseConfig.php";
require_once "../../domain/model/User.php";
require_once "../../data/repository/UserRepository.php";
require_once "../../data/usecase/user/ReadUser.php";
require_once "../../data/usecase/user/UpdateUser.php";

$readUser = new ReadUser();
$updateUser = new UpdateUser();

$input = filter_input_array(INPUT_POST);

if ((isset($_POST['username'])) && (isset($_POST['password']))) {
    $username = $input['username'];
    $password = $input['password'];
    // $senha = md5($senha);



    $user = $readUser->auth($input);
    $token = md5($username . $password); // CRIA UM TOKEN SIMPLES COM MD5, USUARIO E SENHA

    $result_token = $user->getToken();

    if ($result_token != null && trim($result_token) === trim($token)) { // SE OS DADOS FOREM CONFIRMADOS PERMITE ACESSO AO SISTEMA

        $_SESSION['userToken'] = $user->getToken();
        // $_SESSION['userName'] = $resultado['nome'];
        $_SESSION['userUsername'] = $user->getUsername();
        $_SESSION['userPassword'] = $user->getPassword();

        header("Location: ../pages/customer/read.php");

    } else if ($user) {

        $_SESSION['userToken'] = $user->getToken();
        // $_SESSION['userName'] = $resultado['nome'];
        $_SESSION['userUsername'] = $user->getUsername();
        $_SESSION['userPassword'] = $user->getPassword();

        $input['token'] = $token;
        $input['id'] = $user->getId();

        $updateUser->update($input);

        header("Location: ../pages/customer/read.php");

    } else {

        $_SESSION['loginErro'] = "Usuário ou senha Inválido";
        header("Location: ../pages/user/login.php");
    }

} else {
    $_SESSION['loginErro'] = "Usuário ou senha inválido";
    header("Location: ../pages/user/login.php");
}