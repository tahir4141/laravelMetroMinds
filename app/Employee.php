<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class EmployeeModel extends Model
{
    //
    private $table = "employee";
    private $primarykey = "id";
    public function saveData($data) {
        print_r($data);
        die;
        $users = DB::table('users')->get(); 
        return $users->count(); 
      }
}
