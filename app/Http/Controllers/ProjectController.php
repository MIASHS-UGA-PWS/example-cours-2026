<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{
    //
    public function index()
    {
        $projects = Project::all();
        return view('project.index',[
            'title' => 'Project Index',
            'projects' => $projects
        ]);
    }
    public function create()
    {
        return view('project.create');
    }

    public function store()
    {
        Project::create(request(['title', 'description']));

        return redirect('/project'); // méthode pour rediriger vers une autre url (en get par défaut)
    }
}
