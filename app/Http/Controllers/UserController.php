<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function createuser(UserRequest $request){
        $User = User::create([
            "name"=>$request->name,
            'email'=>$request->email,
            'password'=>Hash::make($request->password)
        ]);
        return response()->json([
            "status"=>true,
            "message"=>"You are successfully registered, you can now log in "
        ],200);
    }
    public function loginuser(LoginRequest $request){
        if(!Auth::attempt($request->only(['email', 'password']))){
            return response()->json([
                "status"=>false,
                "message"=>"Wrong credentials, try again"

            ], 401);
        }
        $user= User::where('email', $request->email)->first();
        $token = $user->createToken('API TOKEN')->plainTextToken;
        return response()->json([
            "status"=>true,
            "message"=>"Validated user, make the respective queries",
            "token"=>$token
        ], 200);
    }
    public function allusers(){
        $role=auth()->user()->role;
        if($role=='admin'){
            return response()->json([
                "status"=>true,
                "usuarios"=>User::all()
            ], 200);
        }
        return response()->json([
            "status"=>true,
            "message"=>"you are not authorized, good try "
        ], 201);
    }
    public function logout(Request $request ){
        $request->user()->currentAccessToken()->delete();
        return response()->json([
            'status'=> true,
            'message' => 'session closed correctly',
        ], 200);
    }
}
