<?php
// include "respository/UserRepository.php";

class ReadUser
{

    public function read()
    {
        $repository = new UserRepository();
        $list_of_users = $repository->read();
        return $list_of_users;
    }
}