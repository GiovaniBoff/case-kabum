<?php

class User
{
    private $id;
    private $username;
    private $password;

    private $token;


    function getId()
    {
        return $this->id;
    }

    function getUsername()
    {
        return $this->username;
    }

    function getPassword()
    {
        return $this->password;
    }

    function getToken()
    {
        return $this->token;
    }

    function setId($id)
    {
        $this->id = $id;
    }

    function setUsername($username)
    {
        $this->username = $username;
    }

    function setPassword($password)
    {
        $this->password = $password;
    }

    function setToken($token)
    {
        $this->token = $token;
    }


}