<?php

namespace App\Http\Controllers;


use App\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
    {
        $employes = Employee::all();
        return view ('employee.index')->with('employes', $employes);
    }


    public function create()
    {
        return view('employee.create');
    }


    public function store(Request $request)
    {
        $input = $request->all();
        Employee::create($input);
        return redirect('/employes')->with('flash_message', 'Сотрудник добавлен!');
    }


    public function show($id)
    {
        $employee = Employee::find($id);
        return view('employee.update')->with('employee', $employee);
    }


    public function edit($id)
    {
        $employee = Employee::find($id);
        return view('employee.update')->with('employee', $employee);
    }


    public function update(Request $request, $id)
    {
        $employee = Employee::find($id);
        $input = $request->all();
        $employee->update($input);
        return redirect('/employes')->with('flash_message', 'Сотрудник обновлен!');
    }


    public function destroy($id)
    {
        Employee::destroy($id);
        return redirect('/employes')->with('flash_message', 'Сотрудник удален!');
    }
}