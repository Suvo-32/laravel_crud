<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\System;
use App\Models\User;

class systemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    $users=User::all();
    // dd($userData);
    


    return view('system.index', compact('users'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        // dd($request);
        System::create([
             "computer" => $request->computer,
             "cpu"=>$request->cpu,
             "users_id"=>$request->user_id,
        ]);

   
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        //
        $datas= System::all();
        // dd($data);
        return view('system.show',compact('datas'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $data = System::where('id',$id)->delete();
        dd($data);
    }
}
