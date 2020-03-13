@extends('posts.master')

@section('conteudo')

    {{--FORMULARIO PARA CRIAR POSTS --}}

    <div class="card-body">
        {!! Form::open(['url' => '/posts']) !!}

        <div class="form-group">
            {!! Form::label('titulo', 'Titulo') !!}
            {!!  Form::text('titulo', null, ['placeholder' => 'Digite o titulo', 'class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('texto', 'Texto') !!}
            {!!  Form::text('texto', null, ['placeholder' => 'Digite o texto', 'class' => 'form-control']) !!}
        </div>

        {!! Form::submit('Enviar', ['class'=> 'btn btn-primary float-right']) !!}

    {!! Form::close() !!}
    </div>
@endsection