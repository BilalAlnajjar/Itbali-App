<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function login(Request $request){
        $request->validate([
            'username' => 'required_without:email',
            'password' => 'required',
            'email' => 'required_without:username'
        ]);
        $user = null ;
        if($request->username){
            $user = User::where('username',$request->username)->first();
        }
        else if($request->email){
            $user = User::where('email',$request->email)->first();
        }

        if($user && Hash::check($request->password, $user->password)){
            $token = Str::random(64);

            $user->api_token = $token;
            $user->save();

            return [
                'token' => $token,
            ];
        }

        return response()->json([
            'error' => 'Invalid Username Or Password',
        ]);

    }
}
