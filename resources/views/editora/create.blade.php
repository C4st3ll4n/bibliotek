@extends("templates.template")

@section("tittle")
    Bibliotek
@endsection

@section("content")
    <h1 class="text-center">
        @if(isset($editora))
            Atualizar Editora
        @else
            Cadastrar Editora
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


        @if(isset($editora))
            <form name="formEditEditora" id="formEditEditora" method="post" action="{{url("editora/$editora->id")}}">
                @method("PUT")
                @else
                    <form name="formCadEditora" id="formCadEditora" method="post" action="{{url('editora')}}">
                        @endif

                        @csrf
                        <input required class="form-control" type="text" name="nome" id="nome"
                               placeholder="Nome da editora" value="{{$editora->nome??""}}"><br>
                        <button class="btn btn-primary" type="submit">
                            @if(isset($editora))
                                Atualizar
                            @else
                                Cadastrar
                            @endif

                        </button>
                    </form>
    </div>
@endsection
