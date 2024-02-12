<?php

class ReadUser
{
    public function auth($input)
    {
        $repository = new UserRepository();
        $user = new User();

        $user->setUsername($input["username"]);
        $user->setPassword($input["password"]);

        $userSearched = $repository->find($user);

        // $token = md5($userSearched->getUsername() . $userSearched->getPassword());

        return $userSearched;
    }
}