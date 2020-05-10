@extends("templates.template")

@section("tittle")
    Bibliotek
@endsection

@section("content")
    <h1 class="text-center">CRUD Acervo</h1>
    <hr>

    <div class="container">
        <div class="row">

            <div class="col text-center mt-3 mb-4">
                <a href="{{url('acervo/create')}}">
                    <button class="btn btn-outline-success">Novo Livro</button>
                </a>
            </div>

            <div class="col text-center mt-3 mb-4">
                <a href="{{url('editora')}}">
                    <button class="btn btn-outline-dark">Editoras</button>
                </a>
            </div>
        </div>
    </div>

    <div class="col-8 m-auto">
        @csrf
        <table class="table text-center">
            <thead class="thead-dark">
            <tr>
                <th scope="col">Titulo</th>
                <th scope="col">Autor</th>
                <th scope="col">Editora</th>
                <th scope="col">Ações</th>
            </tr>
            </thead>
            <tbody>

            @foreach($book as $ks)
                @php
                    $editr = $ks->find($ks->id)->relEditora;
                    #var_dump($editr);
                @endphp

                <tr>
                    <td>{{$ks->titulo}}</td>
                    <td>{{$ks->autor}}</td>
                    <td>{{$editr->nome}}</td>
                    <td>
                        <a href="{{url("acervo/$ks->id")}}">
                            <button class="btn btn-dark">Detalhes</button>
                        </a>

                        <a href="{{url("acervo/$ks->id/edit")}}">
                            <button class="btn btn-primary">Editar</button>
                        </a>

                        <a href="{{url("acervo/$ks->id")}}" class="js-del">
                            <button class="btn btn-danger">Remover</button>
                        </a>
                    </td>
                </tr>

            @endforeach

            </tbody>
        </table>


    </div>


    <div class="container">
        <div class="row">
            <div class="col text-center mt-3 mb-4">
            </div>
            <div class="col text-center mt-3 mb-4">
                {{$book->links()}}
            </div>
            <div class="col text-center mt-3 mb-4">
            </div>
        </div>
    </div>

@endsection
