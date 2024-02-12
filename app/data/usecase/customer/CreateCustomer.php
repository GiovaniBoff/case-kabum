<?php

class CreateCustomer
{


    public function create($input)
    {
        $repository = new CustomerRepository;
        $createAddress = new CreateAddress;
        $customer = new Customer;

        $customer->setName($input["name"]);
        $customer->setDateOfBirth($input["date_of_birth"]);
        $customer->setCpf($input["cpf"]);
        $customer->setRg($input["rg"]);
        $customer->setPhone($input["phone"]);

        $customerCreated = $repository->create($customer);

        $createAddress->create($input, $customerCreated);

        return $customerCreated;
    }

}