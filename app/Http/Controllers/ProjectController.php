<?php

namespace App\Http\Controllers;


use App\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::all();
        return view ('project.index')->with('projects', $projects);
    }


    public function create()
    {
        return view('project.create');
    }


    public function store(Request $request)
    {
        $input = $request->all();
        Project::create($input);
        return redirect('/projects')->with('flash_message', 'Проект добавлен!');
    }


    public function show($id)
    {
        $project = Project::find($id);
        return view('project.create')->with('project', $project);
    }


    public function edit($id)
    {
        $project = Project::find($id);
        return view('project.update')->with('project', $project);
    }


    public function update(Request $request, $id)
    {
        $project = Project::find($id);
        $input = $request->all();
        $project->update($input);
        return redirect('/projects')->with('flash_message', 'Проект обновлен!');
    }


    public function destroy($id)
    {
        Project::destroy($id);
        return redirect('/projects')->with('flash_message', 'Проект удален!');
    }
}