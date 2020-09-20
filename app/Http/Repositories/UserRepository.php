<?php


namespace App\Http\Repositories;


use App\Models\User;

class UserRepository
{
    protected $user;
    function __construct(User $user){
        $this->user = $user;
    }
    function save($user){
        $user->save();
    }
    function getAll(){
        return $this->user->select('*')->all()->get();
    }
    function show($id){
        return $this->user->findOrFail($id);
    }
    function destroy($id){
        $this->user->destroy($id);
    }

}
