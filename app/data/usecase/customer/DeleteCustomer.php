<?php
// use UserRepository;

class DeleteCustomer
{
    public function delete($userId)
    {
        $repository = new CustomerRepository;
        $user = new Customer;
        $user->setId($userId);

        return $repository->delete($user);
    }
}