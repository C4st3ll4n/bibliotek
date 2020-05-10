@extends("templates.template")

@section("tittle")
    Bibliotek
@endsection

@section("content")
    <h1 class="text-center">CRUD Editora</h1>
    <hr>

    <div class="container">
        <div class="row">

            <div class="col text-center mt-3 mb-4">
                <a href="{{url('editora/create')}}">
                    <button class="btn btn-outline-success">Cadastrar</button>
                </a>
            </div>

            <div class="col text-center mt-3 mb-4">
                <a href="{{url('acervo')}}">
                    <button class="btn btn-outline-dark">Livros</button>
                </a>
            </div>
        </div>
    </div>

    <div class="col-8 m-auto">
        @csrf
        <table class="table text-center">
            <thead class="thead-dark">
            <tr>
                <th scope="col">Nome</th>
                <th scope="col">Livro(s) Cadastrado(s)</th>
                <th scope="col">Ações</th>
            </tr>
            </thead>
            <tbody>

            @foreach($editora as $edt)
                @php
                    $livros = $edt->find($edt->id)->relBooks->all();
                    $qtd = count($livros);
                @endphp

                <tr>
                    <td>{{$edt->nome}}</td>
                    <td>{{$qtd}}</td>
                    <td>
                        <a href="{{url("editora/$edt->id/edit")}}">
                            <button class="btn btn-primary">Editar</button>
                        </a>

                        <a href="{{url("editora/$edt->id")}}" class="js-del">
                            <button class="btn btn-danger">Remover</button>
                        </a>
                    </td>
                </tr>

            @endforeach

            </tbody>
        </table>
    </div>


@endsection
