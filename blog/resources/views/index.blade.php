@extends('templates.template')

@section('content')

    <h1 class="text-center">BLOG CEJAM</h1>
    <div class="text-center mt-3 mb-4">
        <a href="">
            <button class="btn btn-sucess">Cadastrar</button>
        </a>
    </div>
    <hr>
    <div class="col-8 m-auto">
        <table class="table text-center">
            <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Categoria</th>
                <th scope="col">Autor</th>
                <th scope="col">Notícia</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach(as $Autors -> Autor)

                @php
                    $user=$Autors->find($Autors->id)->relUsers;
                @endphp
                <tr>
                    <th scope="row">{{$Autors->id}}</th>
                    <td>{{$Autors->name}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$Autors->publicationnew}}</td>
                    <td>
                        <a href="">
                            <button class="btn btn-primary">Visualizar</button>
                        </a>

                        <a href="">
                            <button class="btn btn-danger">Deletar</button>
                        </a>
                    </td>
                </tr>
                @endforeach

            </tbody>
        </table>


    </div>


    @endsection
