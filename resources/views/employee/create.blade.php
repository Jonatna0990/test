@extends('layouts.main')
@section('content')
    <div class="card">
        <div class="card-header"><b>Добавить сотрудника</b></div>
        <div class="card-body">
            <form action="{{ route('employes.store') }}" method="post">
                @csrf
                <label>Имя</label></br>
                <input type="text" name="name" id="name" class="form-control">
               </br>
                <input value="Добавить" type="submit">
            </form>
        </div>
    </div>
@stop