<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    public function deployments()
    {
        return $this->hasManyThrough(Deployment::class, Environment::class);
        // return $this->through('environments')->has('deployments'); // String Based Relation Syntax
        // return $this->throughEnvironments()->hasDeployments(); // Dymnamic Relation Syntax
    }
}
