<?php
class Address
{
    private $id;
    private $street;
    private $city;
    private $number;
    private $uf;

    function getId()
    {
        return $this->id;
    }
    function getStreet()
    {
        return $this->street;
    }

    function getCity()
    {
        return $this->city;
    }

    function getNumber()
    {
        return $this->number;
    }

    function getUf()
    {
        return $this->uf;
    }

    function setId($id)
    {
        $this->id = $id;
    }

    function setStreet($street)
    {
        $this->street = $street;
    }

    function setCity($city)
    {
        $this->city = $city;
    }

    function setNumber($number)
    {
        $this->number = $number;
    }

    function setUf($uf)
    {
        $this->uf = $uf;
    }
}