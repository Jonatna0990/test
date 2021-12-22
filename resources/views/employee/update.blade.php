@extends('layouts.main')
@section('content')
    <div class="card">
        <div class="card-header"><b>Редактировать сотрудника</b></div>
        <div class="card-body">
            <form action="{{ route('employes.update', $employee->id) }}" method="post">
                @csrf
                @method('PUT')
                <label>Имя</label></br>
                <input type="text" name="name" id="name" class="form-control" value="{{ isset($employee) ? $employee->name : "" }}">
                </br>
                <input value="Редактировать" type="submit">
            </form>
        </div>
    </div>
@stop
