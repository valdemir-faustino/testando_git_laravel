@extends('layouts.app')
@section('content')

<div class="card" style="width: 18rem;">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text">Detalhes</p>
    @if (isset($cont))
         <p>Id: {{$cont->id}}</p><br>
         <P>E_mail: {{$cont->email}}</P>
    @endif
  </div>
</div>
@endsection