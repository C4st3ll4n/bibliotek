@extends("templates.template")

@section("tittle")
    Bibliotek
@endsection

@section("content")
    <h1 class="text-center">CRUD Editora</h1>
    <hr>

    <div class="text-center mt-3 mb-4">
        <a href="">
            <button class="btn btn-outline-success">Cadastrar</button>
        </a>
    </div>

    <div class="col-8 m-auto">
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
                $livro = $edt->find($edt->id)->relBooks;
                #echo "<pre>";
                #var_dump($livro);
                #echo "</pre>";
                @endphp

                <tr>
                    <td>{{$edt->nome}}</td>
                    <td>{{$livro->count()}}</td>
                    <td>
                        <a href="">
                            <button class="btn btn-primary">Editar</button>
                        </a>

                        <a href="">
                            <button class="btn btn-danger">Remover</button>
                        </a>
                    </td>
                </tr>

            @endforeach

            </tbody>
        </table>
    </div>


@endsection
