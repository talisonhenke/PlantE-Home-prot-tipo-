@extends('posts.master')

@section('conteudo')

    {{--FORMULARIO PARA EDITAR POSTS --}}

    <div class="card-body">
        {!! Form::open(['url' => '/posts/'. $posts->id, 'method' => 'PATCH']) !!}

        <div class="form-group">
            {!! Form::label('titulo', 'Titulo') !!}
            {!!  Form::text('titulo', $posts->titulo, ['placeholder' => 'Digite o titulo', 'class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('texto', 'Texto') !!}
            {!!  Form::text('texto', $posts->texto, ['placeholder' => 'Digite o texto', 'class' => 'form-control']) !!}
        </div>

        {!! Form::submit('Enviar', ['class'=> 'btn btn-primary float-right']) !!}

        {!! Form::close() !!}
    </div>
@endsection
