<?php

class CustomerIsGoldTest extends PHPUnit_Framework_TestCase
{

    /** @test */
    public function a_customer_is_gold_if_they_have_the_respective_type()
    {
        $spec = new CustomerIsGold();

        $goldCustomer = new Customer(['type' => 'gold']);
        $silverCustomer = new Customer(['type' => 'silver']);

        $this->assertTrue($spec->isSatisfiedBy($goldCustomer));
        $this->assertFalse($spec->isSatisfiedBy($silverCustomer));
    }
}
