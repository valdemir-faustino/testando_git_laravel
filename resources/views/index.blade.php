@extends('layouts.app')
@section('content')
    <h1>Testando git_php_laravel</h1>
       <x-alert />
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
                        <a href="{{ route('edit',$cont->id)}}" class="btn btn-success btn-sm">Editar</a>
                        <a href="{{ route('show',$cont->id)}}" class="btn btn-info btn-sm">Detalhes</a>
                        <form action="{{ route('destroy', $cont->id)}}" method="POST" class="d-inline">
                            @csrf
                            @method("delete")
                            <button type="submit" class="btn btn-danger btn-sm">Apagar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
    </table>
@endsection