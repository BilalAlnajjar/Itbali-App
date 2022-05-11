<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return User::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);


        if(User::where('email',$request->email)->first()){
            return response()->json([
                'Exaption' => 0 ,
                'message' => 'this email is Duplicate',
            ]
            );
        }

        $password = Hash::make($request->password);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $password,
        ]);

        $user->update($request->except('name','email','password'));

        if($request->remember_token){

            $remember_token = Hash::make($request->remember_token);
            $user->update([
                'remember_token' => $remember_token,
            ]);
        }

        return response($user);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::findOrFail($id);
        return $user;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);

        if($request->password){
            $password = Hash::make($request->password);
            $user->update([
                'password' => $password,
            ]);

        }

        if($request->remember_token){

            $remember_token = Hash::make($request->remember_token);
            $user->update([
                'remember_token' => $remember_token,
            ]);
        }

        $user->update($request->except('remember_token','password'));

        return response($user);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return response([
            'code' => 1,
            'message' => 'User Deleted',
        ]);
    }
}
