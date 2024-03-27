<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        // dd('hello');
        // $employee = Employee::all();
        return view('welcome');  
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('employee.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        // dd($request->all());
        $data = Employee::create([
            "name" => $request->name,
            "email" => $request->email,
            "role" => $request->role,
            "blood_group" => $request->blood_group,
            "rh" => $request->rh,
            "password" => Hash::make($request->password), // Hash the password
        ]);

        $data1 = User::create([
            "name" => $request->name,
            "email" => $request->email,
            "password" => Hash::make($request->password), // Hash the password
            "employee" =>$request->employee
        ]);
    
        return redirect('/employees')->with('message', "Data inserted successfully");
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        //
        $datas= Employee::all();
        // dd($data);
        return view('employee.show',compact('datas'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $employee = Employee::find($id);
        // dd($employee);
        return view('employee.update',['employee'=>$employee]);
        // dd($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
       $data =  Employee::where('id',$request->id)->update([
            "name"=>$request->name,
            "email"=>$request->email,
            "role"=>$request->role,
            "blood group"=>$request->blood_group,
            "rh"=>$request->rh,
            "password"=>$request->password,
        ]);
        // dd($request->all());
       return "update done";
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        // dd('hi');
      $data = Employee::where('id',$id)->delete();
    //   return redirect('');
    return "successful";
        
    }

    
}
