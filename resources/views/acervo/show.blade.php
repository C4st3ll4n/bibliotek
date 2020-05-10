@extends("templates.template")

@section("tittle")
    Bibliotek
@endsection

@section("content")
    <h1 class="text-center">Visualizar Acervo</h1>
    <hr>


    <div class="col-8 m-auto">
        @php
         $editora = $book->find($book->id)->relEditora;
        @endphp
        Título: {{$book->titulo}}<br>
        Preço: {{$book->preco}}<br>
        Autor: {{$book->autor}}<br>
        Editora: {{$editora->nome}}<br>
        Ano: {{$book->ano}}<br>
        Tipo: {{$book->tipo}}<br>

    </div>
@endsection
