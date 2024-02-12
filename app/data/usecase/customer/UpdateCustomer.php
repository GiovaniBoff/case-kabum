<?php
// use UserRepository;

class UpdateCustomer
{

    public function update($input)
    {
        $repository = new CustomerRepository;
        $customer = new Customer;

        $customer->setName($input["name"]);
        $customer->setDateOfBirth($input["date_of_birth"]);
        $customer->setCpf($input["cpf"]);
        $customer->setRg($input["rg"]);
        $customer->setPhone($input["phone"]);
        $customer->setId($input["id"]);

        return $repository->update($customer);
    }
}