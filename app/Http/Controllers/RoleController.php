<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Role;

class RoleController extends Controller
{
    public function addRole()
    {
        $roles = [
            ["name"=> "Administrator"],
            ["name"=> "Editor"],
            ["name"=> "Author"],
            ["name"=> "Contributor"],
            ["name"=> "Subscriber"],
            ["name"=> "Researcher"],
        ];
        Role::insert($roles);
        return "Roles has been created";
    }
}
