@extends('layouts.main')
@section('content')
    <div class="card">
        <div class="card-header"><b>Добавить проект</b></div>
        <div class="card-body">
            <form action="{{ route('projects.store') }}" method="post">
                @csrf
                <label>Название</label></br>
                <input type="text" name="name" id="name" class="form-control">
               </br>
                <input value="Добавить" type="submit">
            </form>
        </div>
    </div>
@stop