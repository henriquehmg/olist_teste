<?php

namespace App\Http\Controllers;

use App\Models\Tipo_podutos;
use Illuminate\Http\Request;

class TiposProdutosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function __construct(Tipo_podutos $tipo_produto)
    {
        $this->tp_produto = $tipo_produto;
    }

    public function index()
    {
        $data = ['data' =>$this->tp_produto->where('ativo', true)->get()];
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
            $TipoProdutoData = $request->all();
            $this->produto->create($TipoProdutoData);
            return response()->json(['msg' => 'Tipo de produto criado com sucesso', 'cod' => '201'], 201);

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
        $data = ['data' =>$this->tp_produto->where('id', $id)->where('ativo', true)->get()];
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
            $tp_produto = $this->tp_produto->find($id);
            $tp_produto->update($requestData);
            return response()->json(['msg' => 'Tipo de produto atualizado com sucesso', 'cod' => '201'], 201);
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
            $this->tp_produto->where('id', $id)->update(array('ativo' => '0'));
            return response()->json(['msg' => 'Tipo de produto deletado com sucesso', 'cod' => '201'], 201);
        } catch(\Exception $e){
            if(config('app.debug')){
                return response()->json(['msg' => 'Erro ao realizar a operação', 'cod' => '500']);
            }
            return response()->json(['msg' => 'Erro ao realizar a operação', 'cod' => '501']);
        }
    }
}
