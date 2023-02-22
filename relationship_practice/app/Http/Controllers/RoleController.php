<?php

namespace App\Http\Controllers;

use App\Models\Person;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function getRoles($id)
    {
        $roles = Person::find($id);
        return $roles;
    }
}
