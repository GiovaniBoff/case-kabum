<?php
// include "respository/UserRepository.php";

class ReadCustomer
{

    public function read()
    {
        $repository = new CustomerRepository();
        $list_of_users = $repository->read();
        return $list_of_users;
    }
}