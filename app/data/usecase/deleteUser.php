<?php
// use UserRepository;

class DeleteUser
{
    public function delete($userId)
    {
        $repository = new UserRepository;
        $user = new User;
        $user->setId($userId);

        return $repository->delete($user);
    }
}