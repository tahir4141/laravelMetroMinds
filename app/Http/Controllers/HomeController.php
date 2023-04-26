<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Employee;

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
        $data['firstName'] = request('first_name');
        $data['lastName'] = request('last_name');
        $data['email'] = request('email');
        $data['city'] = request('city');
        $data['state'] = request('state');
        $data['age'] = request('age');
        $data['pincode'] = request('pincode');
        $employee = new Employee; 
        $employee->saveData(); 
        // print_r($data);

    }
}

