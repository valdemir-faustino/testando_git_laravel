@extends('layouts.app')
@section('content')

    <body>
        <h1>Criar novo cadastro</h1>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $erro)
                        <li>{{ $erro }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form class="row g-3" action="{{ route('store')}}" method="POST">
            @csrf
            <div class="col-auto">
                <label for="staticEmail2" class="visually-hidden">Email</label>
                <input type="text" readonly class="form-control-plaintext" id="staticEmail2" value="email@example.com">
            </div>
            <div class="col-auto">
                <label for="email" class="visually-hidden">Password</label>
                <input type="text" class="form-control" id="email" name="email" placeholder="email">
            </div>
            <div class="col-auto">
                <button type="submit" class="btn btn-primary mb-3">Confirm identity</button>
            </div>
        </form>
    </body>

    </html>

@endsection