<?php

class Customer
{
    private $id;
    private $name;
    private $dateOfBirth;
    private $cpf;
    private $rg;
    private $phone;
    private $adress;

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

    function getAddress()
    {
        return $this->adress;
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


    function setAddress($adress)
    {
        $this->adress = $adress;
    }

}