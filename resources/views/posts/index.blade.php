@extends('posts.master')

@section('conteudo')
    
 

    <div class="card-body">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Texto</th>
            </tr>
            </thead>
            <tbody>

            @foreach($posts as $key => $value)

                <tr>
                    <th scope="row">{{$value->id}}</th>
                    <td>{{$value->titulo}}</td>
                    <td>{{$value->texto}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection