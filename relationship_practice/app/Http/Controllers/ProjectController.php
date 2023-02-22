<?php

namespace App\Http\Controllers;

use App\Models\Environment;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function getEnvironments($id){
        $environments = Project::find($id);
        return $environments->environment;
    }

    public function getProject($id){
        $project = Project::find($id);
        return $project;
    }

    public function getDeployments($id){
        $environments = Project::find($id);
        return $environments->deployments;
    }
}
