<?php

class CustomersRepository
{
    private $customers;

    public function __construct(array $customers)
    {
        $this->customers = $customers;
    }

    public function matchingSpecification($specification)
    {
        $matches = [];

        foreach ($this->customers as $customer) {
            if ($specification->isSatisfiedBy($customer)) {
                $matches[] = $specification->isSatisfiedBy($customer);
            }
        }
        
        return $matches;
    }

    public function all()
    {
        return $this->customers;   
    }
        
}
