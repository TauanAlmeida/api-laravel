<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use App\Http\Controllers\MasterApiController;

class ClienteApiController extends MasterApiController
{
    protected $model;
    protected $path = 'clientes';
    protected $upload = 'image';
    protected $width = 177;
    protected $height = 236;

   
    public function __construct(Cliente $clientes, Request $request)
    {
        $this->model = $clientes;
        $this->request = $request;
    }

    public function index(){

        $data = $this->model->paginate(10);
        return response()->json($data);
    }


    public function documento($id){
        if(!$data = $this->model->with('documento')->find($id)){
            return response()->json(['error' => 'Nenhum dado foi encontrado.'], 404);
        }else{
            return response()->json($data);
        }
    }

    public function telefone($id){
        if(!$data = $this->model->with('telefone')->find($id)){
            return response()->json(['error' => 'Nenhum dado foi encontrado.'], 404);
        }else{
            return response()->json($data);
        }
    }

    public function alugados($id){
        if(!$data = $this->model->with('filmesAlugados')->find($id)){
            return response()->json(['error' => 'Nenhum dado foi encontrado.'], 404);
        }else{
            return response()->json($data);
        }
    }
    
}
