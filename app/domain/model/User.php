<?php

class User
{
    private $id;
    private $name;
    private $dateOfBirth;
    private $cpf;
    private $rg;
    private $phone;
    private $adress;


    public function __construct($id, $name, $dateOfBirth, $cpf, $rg, $phone, $adress)
    {
        $this->id = $id;
        $this->name = $name;
        $this->dateOfBirth = $dateOfBirth;
        $this->cpf = $cpf;
        $this->rg = $rg;
        $this->phone = $phone;
        $this->adress = $adress;
    }
    function getId()
    {
        return $this->id;
    }

    function getName()
    {
        return $this->name;
    }

    function getDateOfBirth()
    {
        return $this->dateOfBirth;
    }

    function getCpf()
    {
        return $this->cpf;
    }

    function getRg()
    {
        return $this->rg;
    }

    function getPhone()
    {
        return $this->phone;
    }


    function setId($id)
    {
        $this->id = $id;
    }

    function setName($name)
    {
        $this->name = $name;
    }

    function setDateOfBirth($dateOfBirth)
    {
        $this->dateOfBirth = $dateOfBirth;
    }

    function setCpf($cpf)
    {
        $this->cpf = $cpf;
    }

    function setRg($rg)
    {
        $this->rg = $rg;
    }

    function setPhone($phone)
    {
        return $this->phone = $phone;
    }


}