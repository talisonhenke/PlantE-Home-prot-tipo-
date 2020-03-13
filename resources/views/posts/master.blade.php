@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Lista de Posts</div>
                    
                    @yield('conteudo')
                   <div class="float-right">
            <a class='btn btn-xs btn-success' href
="{{route('posts.create')}}">Criar novo Post</a>   
<a href="posts/{{$value->id}}/edit" class="btn btn-success btn-sm">Editar</a>

        </div> 
                </div>

            </div>
        </div>
    </div>
@endsection
