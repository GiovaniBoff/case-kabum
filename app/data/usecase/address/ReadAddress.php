<?php

class ReadAddress
{

    public function read()
    {
        $repository = new AddressRepository();
        $list_of_address = $repository->read();
        return $list_of_address;
    }
}