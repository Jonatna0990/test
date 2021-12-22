@extends('layouts.main')
@section('content')
    <table>
        <thead>
            <tr>
                <td></td>
                @foreach($days as $day)
                    <td>{{$day->name}}</td>
                @endforeach
            </tr>
        </thead>
        @foreach($projects as $project)
            <tr>
                <td>{{$project->name}}</td>
                @foreach($days as $day)
                    <td>
                        <form action="{{ url('/update') }}" method="post">
                            @csrf
                            <input type="text" name="project_id" value="{{$project->id}}" hidden>
                            <input type="text" name="day_id" value="{{$day->id}}" hidden>
                            <select name="employee_id">
                                <option value="0">Не выбрано</option>
                                @foreach($employes as $employee)
                                    @foreach($project_days as $project_day)
                                        @if($project_day->employee_id == $employee->id
                                        && $project_day->day_id == $day->id
                                        && $project_day->project_id == $project->id)
                                            <option selected value="{{$employee->id}}">{{$employee->name}}</option>
                                        @endif
                                    @endforeach
                                        <option value="{{$employee->id}}">{{$employee->name}}</option>
                                @endforeach
                            </select>
                            <input class="wo_border" value="✓" type="submit">
                        </form>
                    </td>
                @endforeach
            </tr>
        @endforeach
    </table>
@endsection



