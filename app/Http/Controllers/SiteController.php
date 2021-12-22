<?php

namespace App\Http\Controllers;


use App\Day;
use App\Employee;
use App\Project;
use App\ProjectDay;
use Illuminate\Http\Request;

class SiteController extends Controller
{

    public function index()
    {
        $projects = Project::all();
        $days = Day::all();
        $employes = Employee::all();
        $project_days = ProjectDay::all();
        return view('table', ['projects' => $projects, 'days' => $days, 'employes' => $employes, 'project_days' => $project_days]);
    }

    public function projects()
    {
        return view('project');
    }

    public function employes()
    {
        return view('employee');
    }

    public function update(Request $request)
    {
        $input = $request->all();
        $project_id = $request->input('project_id');
        $day_id = $request->input('day_id');
        $project_day = ProjectDay::where('project_id', $project_id)->where('day_id', $day_id)->first();
        if($project_day) {
            $project_day->update($input);
        }
        else {
            ProjectDay::create($input);
        }
        return redirect('/')->with('flash_message', 'Проект обновлен!');
    }
}