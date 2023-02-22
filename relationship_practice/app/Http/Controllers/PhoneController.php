<?php

namespace App\Http\Controllers;

use App\Models\Phone;
use App\Models\User;
use Illuminate\Http\Request;

class PhoneController extends Controller
{
    public function getUserOfPhone($id)
    {
        $user = User::find($id)->phone;
        return $user;
    }

    public function getPhoneOfUser($id)
    {
        $phone = Phone::find($id)->user;
        return $phone;
    }
}
