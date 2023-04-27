<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{

    protected $table = "employee";
    protected $primarykey = "id";
    protected $fillable = ['first_name','last_name','email','age','city','state','pincode'];  
    public $timestamps = FALSE;
    //  public function saveData($data) {
    //     print_r($data);
    //     die;
    //     $users = DB::table('users')->get(); 
    //     return $users->count(); 
    //   }
}
