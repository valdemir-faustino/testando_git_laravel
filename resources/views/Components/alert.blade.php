
@if (session('success'))
  <div class="alert alert-success" role="alert">
    {{ session('success') }}
  </div>
@endif

@if ($errors->any())
    @foreach ($errors->all() as $erro)
        <x-alert type="danger" :message="$erro" />
    @endforeach
@endif
