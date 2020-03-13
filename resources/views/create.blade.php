<!-- create.blade.php -->

@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Adicionar Erva
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
      <form method="post" action="{{ route('Ervas.store') }}">
          <div class="form-group">
              @csrf
              <label for="name">Nome da erva:</label>
              <input type="text" class="form-control" name="nome_erva"/>
          </div>
          <div class="form-group">
              <label for="descricao">Descrição:</label>
              <input type="text" class="form-control" name="descricao"/>
          </div>
          <div> 
              <label for="foto">Descrição:</label>
              <input type="file" id="foto" name="foto"/>
          </div>
    
          <button type="submit" class="btn btn-primary">Adicionar erva</button>
      </form>
  </div>
</div>
@endsection