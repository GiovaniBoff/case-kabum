<?php
// include "respository/UserRepository.php";

class ReadCustomer
{

    public function read()
    {
        $repository = new CustomerRepository();
        $list_of_users = $repository->find();
        return $list_of_users;
    }
}