<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;

class CustomAuthController extends Controller
{
    public function editPassword(){
        return view("edit_password");
    }
    public function updatePassword(Request $request, $id){
        $user = User::find($id);
        $user->password = Hash::make($request['newPassword']);
        $user->save();
        return back();
    }
}
