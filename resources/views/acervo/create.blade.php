@extends("templates.template")

@section("tittle")
    Bibliotek
@endsection

@section("content")
    <h1 class="text-center">
        @if(isset($book))
            Editar Acervo
        @else
            Cadastrar Acervo
        @endif
    </h1>
    <hr>

    <div class="col-8 m-auto">

        @if(isset($errors) && count($errors) >0)
            <div class="text-center mt-4 mb-4 p-2 alert-danger">
                @foreach($errors->all() as $err)
                    {{$err}}<br>
                @endforeach
            </div>
        @endif


        @if(isset($book))
            <form name="formEditAcervo" id="formEditAcervo" method="post" action="{{url("acervo/$book->id")}}">
                @method("PUT")
                @else
                    <form name="formCadAcervo" id="formCadAcervo" method="post" action="{{url('acervo')}}">
                        @endif
                        @csrf

                        <input required class="form-control" value="{{$book->titulo??''}}"
                               type="text" name="titulo" id="titulo"
                               placeholder="Titulo"><br>

                        <select class="form-control" name="id_editora" id="id_editora">
                            <option value="{{$book->relEditora->id??null}}"
                            >{{$book->relEditora->nome??'Selecione uma editora'}}
                            </option>

                            @foreach($editoras as $editora)
                                <option value="{{$editora->id}}">{{$editora->nome}}</option>
                            @endforeach
                        </select><br>

                        <input required class="form-control" type="text" name="autor" id="autor"
                               placeholder="Autor" value="{{$book->autor??''}}"><br>

                        <input required class="form-control" type="number" name="ano" id="ano"
                               placeholder="Ano" value="{{$book->ano??''}}"><br>

                        <input required class="form-control" type="number" name="preco" id="preco"
                               placeholder="Preço" value="{{$book->preco??''}}"><br>

                        <input required class="form-control" type="number" name="quantidade" id="quantidade"
                               placeholder="Quantidade" value="{{$book->quantidade??''}}"><br>

                        <input required class="form-control" type="number" value="{{$book->tipo??''}}"
                               name="tipo" id="tipo" placeholder="Tipo"><br>

                        <button class="btn btn-primary" type="submit">
                            @if(isset($book))
                                Atualizar
                            @else
                                Cadastrar
                            @endif

                        </button>
                    </form>
    </div>
@endsection
