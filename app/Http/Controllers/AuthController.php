<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    //
    public function loginUser(){
        return view('employee.login');
    }

    public function UserCheck(Request $request){
        //dd($request);
        $email = $request->email;
        $password = $request->password;
        //dd($password);
        //$userData=Employee::select('email','password')->where('name','nitai')->first();
        //dd($userData);
        // $user_email = $userData->email;
        // $user_password = $userData->password;
        // if($user_email == $email && $user_password == $password)
        // {
        //     dd('87654');
        // }
        if (Auth::attempt(['email' => $email, 'password' => $password])) {
         
            $request->session()->put('user','login');
            // $request->session()->put('user_expires_at', now()->addSeconds(60)); 
            return redirect('/home');
        } else {
            return "Invalid credentials. Please try again.";
        }  
    }

    public function HomeUser(){
        return view('home');
    }

    public function destroy(Request $request)
    {
        // User::user_activity('logout');

        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }

}


