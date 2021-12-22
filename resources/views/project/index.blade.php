@extends('layouts.main')

@section('content')
    <div>
        <div>
            <div>
                <div>
                    <div><b>Проекты</b></div>
                    @isset($flash_message)
                        <h1>{{$flash_message}}}</h1>
                    @endisset
                    <div>
                        <a href="{{ url('/projects/create') }}" title="Add New Contact">
                            <i></i> Добавить проект
                        </a>
                        <br/>
                        <br/>
                        <div>
                            <table>
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Название</th>
                                    <th>Действия</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($projects as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>
                                            <a href="{{ url('/projects/' . $item->id . '/edit') }}"><button><i></i>🖉</button></a>
                                            <form method="POST" action="{{ url('/projects' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                @csrf
                                                <button type="submit" onclick="return confirm(&quot;Удалить?&quot;)"><i></i>✖</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


