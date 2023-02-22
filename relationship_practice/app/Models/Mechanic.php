<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mechanic extends Model
{
    use HasFactory;

    public function carOwner()
    {
        return $this->hasOneThrough(Owner::class, Car::class);
        // return $this->through('cars')->has('owner'); // String Syntax of Relationships
        // return $this->throughCars()->hasOwner(); // Dynamic Syntax of Relationships
    }
}
