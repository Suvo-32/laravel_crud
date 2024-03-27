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

        $email = $request->email;
        $password = $request->password;
        $employee_type = $request->employee_type;
      
        if (Auth::attempt(['email' => $email, 'password' => $password ,])) {
         
            $id = User::where('email', $email)->select('id')->first();
            $request->session()->put('user','login');
            $request->session()->put('email',$email);
            $request->session()->put('users_id',$id);
            // dd($request->all());
            $emp_type = User::where('email', $email)->pluck('employee')->first();
            // dd($emp_type);
            if ($emp_type != 'normal') {
                return redirect('/home');
            }elseif($emp_type == 'normal' && $employee_type != 'normal'){
                  return "Invalid credentials. Please try again.";
            }else {
                return "hello, normal";
            }
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


