<?php


namespace App\Http\Repositories;


use App\Models\Customer;

class RegisterRepository
{
    protected $customer;
    public function __construct(Customer $customer)
    {
        $this->customer=$customer;
    }
    public function save($customer)
    {
        $customer->save();
    }
}
