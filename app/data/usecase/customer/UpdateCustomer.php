<?php
// use UserRepository;

class UpdateCustomer
{

    public function update($input)
    {
        $repository = new CustomerRepository;
        $user = new Customer;

        $user->setName($input["name"]);
        $user->setDateOfBirth($input["date_of_birth"]);
        $user->setCpf($input["cpf"]);
        $user->setRg($input["rg"]);
        $user->setPhone($input["phone"]);
        $user->setId($input["id"]);

        return $repository->update($user);
    }
}