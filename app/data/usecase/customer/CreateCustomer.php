<?php
// require_once 'app/data/repository/UserRepository.php';

class CreateCustomer
{


    public function create($input)
    {
        $repository = new CustomerRepository;
        $user = new Customer;

        $user->setName($input["name"]);
        $user->setDateOfBirth($input["date_of_birth"]);
        $user->setCpf($input["cpf"]);
        $user->setRg($input["rg"]);
        $user->setPhone($input["phone"]);

        return $repository->create($user);
    }

}