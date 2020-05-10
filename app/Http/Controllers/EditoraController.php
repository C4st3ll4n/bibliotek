<?php

namespace App\Http\Controllers;

use App\Http\Requests\EditoraRequest;
use App\Models\Book;
use App\Models\Editora;
use Illuminate\Http\Response;

class EditoraController extends Controller
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
     * @return Response
     */
    public function index()
    {
        $editora = $this->objEditora->all();
        return view('editora/editora', compact('editora'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('editora/create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param EditoraRequest $request
     * @return Response
     */
    public function store(EditoraRequest $request)
    {
        if($this->objEditora->create([
            "nome"=> $request->nome
        ])){
            return  redirect("editora");
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $editora = $this->objEditora->find($id);
        return view('editora/create', compact('editora'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param EditoraRequest $request
     * @param  int  $id
     * @return Response
     */
    public function update(EditoraRequest $request, $id)
    {
        if($this->objEditora->where("id",$id)->update([
            "nome"=> $request->nome
        ])){
            return  redirect("editora");
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        return $this->objEditora->destroy($id);
    }
}
