@extends('layouts.app')
@section('content')

<body>
    <h1>Editar cadastro</h1>
    <form class="row g-3" action="{{ route('update', $cont->id)}}" method="POST">
        @csrf
        @method("PUT")
        <div class="col-auto">
            <label for="staticEmail2" class="visually-hidden">Email</label>
            <input type="text" readonly class="form-control-plaintext" id="staticEmail2" value="email@example.com">
        </div>
        <div class="col-auto">
            <label for="email" class="visually-hidden">Password</label>
            <input type="text" class="form-control" id="email" name="email" value="{{$cont->email}}">
        </div>
        <div class="col-auto">
            <button type="submit" class="btn btn-warning mb-3">Editar</button>
        </div>
    </form>
</body>

</html>

@endsection