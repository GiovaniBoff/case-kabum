<?php
class Address
{
    private $id;
    private $street;

    function getId()
    {
        return $this->id;
    }
    function getStreet()
    {
        return $this->street;
    }


    function setId($id)
    {
        $this->id = $id;
    }

    function setStreet($street)
    {
        $this->street = $street;
    }

}