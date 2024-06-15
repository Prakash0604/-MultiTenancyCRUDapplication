<?php

namespace App\Http\Controllers;

use App\Models\Tenant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class TenantUserAuth extends Controller
{
    public function index(){
        return view('TenantUserAuth.Login');
    }

    public function store(Request $request){
        $request->validate([
            'email'=>'required|string|email',
            'password'=>'required|string|min:6',
        ]);
        $users=Tenant::where('email',$request->email)->first();
        if($users){
            if(Hash::check($request->password,$users->password)){
                // Auth::login($users);
                return redirect()->route('users.index');
            }else{
                return response()->json(['message'=>'Invalid username & password']);
            }
        }else{
            return response()->json(['message'=>'user not register']);
        }
    }
}
