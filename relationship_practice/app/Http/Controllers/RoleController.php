<?php

namespace App\Http\Controllers;

use App\Models\People;
use App\Models\Person;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function getRolesOfUser($id)
    {
        $roles = User::find($id)->roles;
        return $roles;
    }

    public function getUsersByRole($id){
        $users = Role::find($id)->users;
        return $users;
    }
}
