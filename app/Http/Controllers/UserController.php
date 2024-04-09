<?php

namespace App\Http\Controllers;
use Illuminate\Http\request;
use App\Models\User;

class UserController extends Controller
{
    private $request;

    public function _construct(Request $request){
        $this->request = $request;
    }

    public function getUser(){
        $users = User::all();
        return response()->json($users, 200);
    }

    /**
     * Return the list of users
     * @return Illuminate\Http\Response
     */

     public function index(){
        $users = User::all();
        return response()->json($users, 200);
     }

    //  add
    public function add(Request $request){
        $rules = [
            'username' => 'required|max:20',
            'password' => 'required|max:20',
        ];

        $this->validate($request ,$rules);

        $user = User::create($request->all());

        return response()->json($user, 200);
    }
}
