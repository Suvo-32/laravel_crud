<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;
use Session;
use App\Models\User;
class ChatController extends Controller
{
    //
    public function userChat (){
        $datas=Message::with('user')->get();
        // dd($datas);
      return view("chat", compact("datas"));
    }

    public function messegeChat (Request $request){
        $userId = $request->session()->get('users_id');
     
        $data = Message::create([
            "users_id" =>  $userId->id,
            "messege" => $request->messege,
        ]);
      return redirect('chat');
    }
}
