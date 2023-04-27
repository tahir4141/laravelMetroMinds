<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Employee;
use DB;


class HomeController extends Controller
{
    public function saveData(Request $request)
    {
        // return 'it works';
        $validatedData = $request->validate([
            'first_name' => 'required|max:20',
            'last_name' => 'required|max:20',
            'email' => 'required|email|max:30',
            'city' => 'required|max:20',
            'pincode' => 'required|max:10',
            'state' => 'required|max:20',
            'age' => 'required|max:5',
        ]);
      
        
        $employee = new Employee; 
        $employee->first_name = request('first_name');
        $employee->last_name = request('last_name');
        $employee->email = request('email');
        $employee->city = request('city');
        $employee->state = request('state');
        $employee->age = request('age');
        $employee->pincode = request('pincode');

        $employee->save(); 
        return redirect('/home')->with('message',"Data added Successfully");

    }

    public function getData()
    {  
        $employees =  Employee::paginate(10);
        // print_r($employees);
        // die;
        return view('view',['employees'=> $employees]);
    }

    public function editData($id)
    {  
        $employees =  Employee::find($id)->toArray();
        return view('edit',compact('employees'));
    }

    public function updateData(Request $request,$id)
    {  
        $employee =  Employee::find($id);
        $employee->first_name = $request->input('first_name');
        $employee->last_name =  $request->input('last_name');
        $employee->email =  $request->input('email');
        $employee->city =  $request->input('city');
        $employee->state =  $request->input('state');
        $employee->pincode = request('pincode');
        $employee->age =  $request->input('age');
        $employee->update(); 

        return redirect('/view')->with('messages',"Record updated Successfully");
    }

    public function deleteData($id)
    {  
        $data =  Employee::find($id);
        $data->delete();
        return redirect('/view')->with('dmessage',"Record Deleted Successfully");
    }
}

