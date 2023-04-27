<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Employee;

class HomeController extends Controller
{
    public function getData(Request $request)
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
        return redirect('/home');
        // print_r($data);

    }
}

