<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    public function owner(){
        return $this->hasMany(Owner::class);
    }

    public function mechanic(){
        return $this->hasMany(Mechanic::class);
    }
}
