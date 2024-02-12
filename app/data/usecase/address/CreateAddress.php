<?php
class CreateAddress
{

    public function create($input, $customerId)
    {
        $repository = new AddressRepository();
        $address = new Address();

        $address->setStreet($input["street"]);
        
        return $repository->create($address, $customerId);
    }
}