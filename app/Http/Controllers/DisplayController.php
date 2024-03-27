<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\System;


class DisplayController extends Controller
{
    //
    public function display(Request $request){

         
         $email = $request->session()->get('email');

        //  $usersWithEmail = [];
 
        //one to one
        $data=User::with('system')->where('email',$email)->first();
        // dd($data);
        if ($data) {
            $systemAttributes = $data->system->toArray();
            // Access individual attributes like $systemAttributes['attribute_name']
        }
      
        // dd($systemAttributes);
        // dd($data);
      
        return view("display",compact('data'));
    }
}

