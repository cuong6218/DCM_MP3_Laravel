<?php


namespace App\Http\Services;


use App\Http\Repositories\RegisterRepository;
use App\Models\Customer;
use Illuminate\Support\Facades\Hash;

class RegisterService
{
    protected $registerRepo;
    public function __construct(RegisterRepository $registerRepo)
    {
        $this->registerRepo=$registerRepo;
    }
    public function addCustomer($request)
    {
        $customer = new Customer();
        $customer->name = $request->name;
        $customer->email=$request->email;
        $customer->password=Hash::make($request->password);
        $this->registerRepo->save($customer);
    }
}
