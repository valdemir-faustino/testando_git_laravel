@extends('layouts.app')
@section('content')
    <h1>Testando git_php_laravel</h1>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Email</th>
                <th scope="col">Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($conts as $cont)
                <tr>
                    <td>{{$cont->id}}</td>
                    <td>{{$cont->email}}</td>
                    <td>
                        <a href="{{ route('edit')}}" class="btn btn-success btn-sm">Editar</a>
                        <a href="{{ route('show')}}" class="btn btn-info btn-sm">Detalhes</a>
                    </td>
                </tr>
            @endforeach
    </table>
@endsection