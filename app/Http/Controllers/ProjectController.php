<?php

namespace App\Http\Controllers;
use App\Models\Projects;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    // All data
    public function index() {
        
        $projects = Projects::all();
        return view('pages.projects', [
            'projects' => $projects,
        ]);

    }
}
