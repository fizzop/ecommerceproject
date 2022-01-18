<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\signUpUser;
use Illuminate\Support\Facades\Hash;

class userController extends Controller
{
    //
    public function signUp(Request $request)
    {
        $user['name'] = $request->name;
        $user['email'] = $request->email;
        $user['password'] = Hash::make($request->password);

        $INS = DB::table('sign_up_users')->insert($user);
        return Redirect()->back();
    }
    public function signIn(Request $request)
    {
        $user = signUpUser::where(['email' => $request->email])->first();
        if (!$user || !Hash::check($request->password, $user->password)) {
            return "Username or password is not matched";
        } else {
            $request->session()->put('user', $user);
            return redirect('/');
        }
    }
}
