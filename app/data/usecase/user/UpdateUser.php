<?php

class UpdateUser
{
    public function update($input)
    {
        $repository = new UserRepository();
        $user = new User();

        $user->setId($input["id"]);
        $user->setToken($input["token"]);

        return $repository->update($user);


    }

}