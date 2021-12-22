@extends('layouts.main')
@section('content')
    <div class="card">
        <div class="card-header"><b>Редактировать проект</b></div>
        <div class="card-body">
            <form action="{{ route('employes.update', $project->id) }}" method="post">
                @csrf
                @method('PUT')
                <label>Название</label></br>
                <input type="text" name="name" id="name" class="form-control" value="{{ isset($project) ? $project->name : "" }}">
                </br>
                <input value="Редактировать" type="submit">
            </form>
        </div>
    </div>
@stop
