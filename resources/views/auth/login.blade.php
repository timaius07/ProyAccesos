@extends('layouts.app')
@section('content')
<div class="row">
  <div class="col-md-5 col-md-offset-5">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h1 class="panel-title"> Acceso a la aplicación</h1>
      </div>
      <div class="panel-body">
        <form method="POST" action="{{ route('login')}}">

          <div class="form-group {{ $errors->has('username') ? 'has-error' : '' }}">
              <label for="cedula">Id Usuario</label>
              <input class="form-control"
                     type="text"
                     name="username"
                     placeholder="Ingrese su Id de usuario">
                     {!! $errors-> first('username', '<span class="help-block">:message</span>')!!}
          </div>
          <div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
              <label for="contrasena">Contraseña</label>
              <input class="form-control"
                     type="password"
                     name="password"
                     placeholder="Ingrese su contraseña">
                     {!! $errors-> first('contrasena', '<span class="help-block">:message</span>')!!}
          </div>
          <button class="btn btn-primary btn-block" name="submit"> Acceder </button>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
