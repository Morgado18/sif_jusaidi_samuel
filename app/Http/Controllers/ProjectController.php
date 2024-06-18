<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Message;
use App\Models\User;
use Auth;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::all();
        return view('projects.index', compact('projects'));
    }

    public function create()
    {
        return view('projects.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        $project = new Project;
        $project->title = $request->title;
        $project->description = $request->description;
        $project->user_id = Auth::id(); // Assuming the user is logged in
        $project->save();

        return redirect()->route('projects.index')->with('success', 'Project created successfully!');
    }

    public function show($id)
    {
        $project = Project::findOrFail($id);
        return view('projects.show', compact('project'));
    }

    public function expressInterest($id)
    {
        $project = Project::findOrFail($id);
        $message = new Message;
        $message->from_user_id = Auth::id();
        $message->to_user_id = $project->user_id;
        $message->message = 'I am interested in your project!';
        $message->save();

        return redirect()->route('projects.index')->with('success', 'Interest expressed successfully!');
    }
}
