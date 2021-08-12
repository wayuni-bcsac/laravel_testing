<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Staff;

class StaffController extends Controller
{
    public function getAllStaff()
    {
        $staffs = Staff::where('id','<',15)->get();
        return $staffs;
    }
}
