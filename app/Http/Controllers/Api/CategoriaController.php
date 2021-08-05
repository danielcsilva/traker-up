<?php

namespace App\Http\Controllers\Api;

use App\Categoria;
use App\Http\Controllers\Controller;
use App\Http\Requests\CategoriaRequest;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categoria = Categoria::all();

        if(!empty($categoria)){

            return response()->json($categoria, Response::HTTP_OK);
            
        }else{
            return response()->json(['message'=>'Nenhuma categoria encontrada'], Response::HTTP_NO_CONTENT);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoriaRequest $request)
    {
        try{

            $validatedCategoria = $request->validated();

            
            $categoria = Categoria::create($validatedCategoria);

            return response()->json('cadastrado com sucesso!', Response::HTTP_OK);

        }catch(\Exception $e){
            return response()->json($e->getMessage(), Response::HTTP_BAD_REQUEST);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {


        $categoria = Categoria::find($id);

        if(!empty($categoria)){

            return response()->json($categoria->toArray(), Response::HTTP_OK);
            
        }else{
            return response()->json(['message'=>'Nenhuma categoria encontrada'], Response::HTTP_NO_CONTENT);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
