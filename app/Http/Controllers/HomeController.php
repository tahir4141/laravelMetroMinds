<?php

namespace App\Http\Controllers;


class HomeController extends Controller
{
    public function getData()
    {
        // return 'it works';
        $data['firstName'] = request('first_name');
        $data['lastName'] = request('last_name');
        $data['city'] = request('city');
        $data['state'] = request('state');
        $data['address'] = request('address');
        $data['pincode'] = request('pincode');
        print_r($data);

    }
}

