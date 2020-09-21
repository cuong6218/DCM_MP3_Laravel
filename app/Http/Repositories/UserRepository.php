<?php


namespace App\Http\Repositories;


use App\Models\Customer;
use Illuminate\Support\Facades\DB;

class UserRepository
{
    protected $user;
    function __construct(Customer $user){
        $this->user = $user;
    }
    function save($user){
        $user->save();
    }
    function getAll(){
        return DB::table('customers')->get();
    }
    function show($id){
        return $this->user->findOrFail($id);
    }
    function destroy($id){
        $this->user->destroy($id);
    }

}
