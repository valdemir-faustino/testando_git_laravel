@extends('layouts.app')
@section('content')

<div class="card" style="width: 18rem;">
    <div class="card-body">
        @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $erro)
                <li>{{ $erro }}</li>
            @endforeach
        </ul>
    </div>
@endif
        <h5 class="card-title">Detalhes do Contato</h5>
         
        @if (isset($cont))
            <dl class="row">
                <dt class="col-sm-4">ID:</dt>
                <dd class="col-sm-8">{{ $cont->id }}</dd>

                <dt class="col-sm-4">E-mail:</dt>
                <dd class="col-sm-8">{{ $cont->email }}</dd>
            </dl>
        @else
            <p class="text-muted">Nenhum contato encontrado.</p>
        @endif
    </div>
</div>
@endsection