@extends ('layouts.app')

@section('content')
  <div class="col-md-5 col-md-offset-5">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h1 class="panel-title"> Bienvenido {{ auth()->user()->name }}</h1>
      </div>
    </div>
  </div>
@endsection
