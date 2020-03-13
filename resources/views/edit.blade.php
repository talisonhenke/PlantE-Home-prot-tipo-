<!-- edit.blade.php -->

@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Editar erva.
  </div>
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('Ervas.update', $erva->id) }}">
          <div class="form-group">
              @csrf
              @method('PATCH')
              <label for="name">Nome da erva:</label>
              <input type="text" class="form-control" name="nome" value="{{$erva->nome}}"/>
          </div>
          <div class="form-group">
              <label for="price">Descrição:</label>
              <input type="text" class="form-control" name="descricao" value="{{$erva->descricao}}"/>
          </div>
          <div class="form-group">
              <label for="quantity">Foto:</label>
              <input type="text" class="form-control" name="foto" value="{{$erva->foto}}"/>
          </div>
          <button type="submit" class="btn btn-primary">Atualizar</button>
      </form>
  </div>
</div>
@endsection