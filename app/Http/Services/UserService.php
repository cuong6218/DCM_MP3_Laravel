<?php


namespace App\Http\Services;


use App\Http\Repositories\UserRepository;
use App\Models\Customer;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
//use Illuminate\Support\Facades\Request;
use Illuminate\Http\Request;
class UserService
{
    protected $userRepo;
    function __construct(UserRepository $userRepo){
        $this->userRepo = $userRepo;
    }
    function getAll(){
        return $this->userRepo->getAll();
    }
    function store(Request $request){
        $user = new Customer();
        $user->fill($request->all());
        $user->password = Hash::make($request->passwor);
        $this->userRepo->save($user);
    }
    function destroy($id){
        $this->userRepo->destroy($id);
    }
    function show($id){
        return $this->userRepo->show($id);
    }
    function update($request, $id){
        $user = $this->userRepo->show($id);
        $user->fill($request->all());
        $this->userRepo->save($user);
    }
}
