@extends('layouts.main')

@section('content')
    <div>
        <div>
            <div>
                <div>
                    <div><b>Сотрудники</b></div>
                    @isset($flash_message)
                        <h1>{{$flash_message}}}</h1>
                    @endisset
                    <div>
                        <a href="{{ url('/employes/create') }}" title="Add New Contact">
                            <i></i> Добавить сотрудника
                        </a>
                        <br/>
                        <br/>
                        <div>
                            <table>
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Имя</th>
                                    <th>Действия</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($employes as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>
                                            <a href="{{ url('/employes/' . $item->id . '/edit') }}"><button><i></i>🖉</button></a>
                                            <form method="POST" action="{{ url('/employes' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
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


