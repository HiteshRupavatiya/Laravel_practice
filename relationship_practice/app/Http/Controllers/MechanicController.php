<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Mechanic;
use App\Models\Owner;
use Illuminate\Http\Request;

class MechanicController extends Controller
{
    public function getAllOwnerOfCar($id){
        $owners = Mechanic::findOrFail($id)->carOwner->get(); // getting All owners of car
        return $owners;
    }

    public function getAllMechanicOfCar($id){
        $mechanics = Car::where('mechanic_id', $id)->get(); // getting All mechanics of car
        return $mechanics;
    }
}
