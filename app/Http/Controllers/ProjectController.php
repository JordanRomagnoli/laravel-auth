<?php

namespace App\Http\Controllers;

//Models
use App\Models\Project;

use Illuminate\Http\Request;

// Helper
use Illuminate\Support\Str;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::all();

        return view("/", compact("projects"));
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

}
