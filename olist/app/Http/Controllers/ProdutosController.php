<?php

namespace App\Http\Controllers;

use App\Models\Produtos;
use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct(Produtos $produto)
    {
        $this->produto = $produto;
    }


    public function index()
    {
        $data = ['data' =>$this->produto->where('ativo', true)->get()];
        return response()->json($data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try{
            $produtoData = $request->all();
            $this->produto->create($produtoData);
            return response()->json(['msg' => 'Produto criado com sucesso', 'cod' => '201'], 201);

        } catch(\Exception $e){
            if(config('app.debug')){
                return response()->json(['error'=> $e->getMessage(), 'codigo'=> '500'], 500);
            }
            return response()->json(['error'=> 'Erro ao realizar a operação', 'codigo'=> '501'], 501);
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
        $data = ['data' =>$this->produto->where('id', $id)->where('ativo', true)->get()];
        return response()->json($data);
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
        try{
            $requestData = $request->all();
            $produtos = $this->produto->find($id);
            $produtos->update($requestData);
            return response()->json(['msg' => 'Produto atualizado com sucesso', 'cod' => '201'], 201);
        } catch(\Exception $e){
            if(config('app.debug')){
                return response()->json(['msg' => 'Erro ao realizar a operação', 'cod' => '500'], 500);
            }
            return response()->json(['msg' => 'Erro ao realizar a operação', 'cod' => '501'], 501);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try{
            $this->produto->where('id', $id)->update(array('ativo' => '0'));
            return response()->json(['msg' => 'Produto deletado com sucesso', 'cod' => '201'], 201);
        } catch(\Exception $e){
            if(config('app.debug')){
                return response()->json(['msg' => 'Erro ao realizar a operação', 'cod' => '500']);
            }
            return response()->json(['msg' => 'Erro ao realizar a operação', 'cod' => '501']);
        }
    }
}
