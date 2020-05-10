<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookRequest;
use App\Models\Book;
use App\Models\Editora;
use Illuminate\Http\Request;

class AcervoController extends Controller
{

    private $objBook;
    private $objEditora;

    public function __construct()
    {
        $this->objBook = new Book();
        $this->objEditora = new Editora();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        #dd($this->objBook->find(1)->relEditora);
        #dd($this->objEditora->find(1)->relBooks);
        $book = $this->objBook->paginate(6);
        return view('acervo/acervo', compact('book'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $editoras = $this->objEditora->all();
        return view('acervo/create', compact('editoras'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(BookRequest $request)
    {

        if($this->objBook->create([
            "titulo" => $request->titulo,
            "ano" => $request->ano,
            "preco" => $request->preco,
            "autor" => $request->autor,
            "quantidade" => $request->quantidade,
            "tipo" => $request->tipo,
            "idEditora" => $request->id_editora,
        ])){
            return redirect('acervo');
        }

    }


    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $book = $this->objBook->find($id);
        return view('acervo/show', compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $book = $this->objBook->find($id);
        $editoras = $this->objEditora->all();
        return view('acervo/create', compact('book', "editoras"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(BookRequest $request, $id)
    {
        $this->objBook->where(['id'=>$id])->update(
            [
                "titulo" => $request->titulo,
                "ano" => $request->ano,
                "preco" => $request->preco,
                "autor" => $request->autor,
                "quantidade" => $request->quantidade,
                "tipo" => $request->tipo,
                "idEditora" => $request->id_editora,
            ]
        );

        return redirect("acervo");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if($this->objBook->destroy($id)){
            return true;
        }else{
            return false;
        }
    }
}
