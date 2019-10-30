<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Telefone;
use App\Http\Controllers\MasterApiController;

class TelefoneApiController extends MasterApiController
{
    protected $model;
    protected $path;
    protected $upload;
   
    public function __construct(Telefone $tel, Request $request)
    {
        $this->model = $tel;
        $this->request = $request;
    }

    public function cliente($id){
        if(!$data = $this->model->with('cliente')->find($id)){
            return response()->json(['error' => 'Nenhum dado foi encontrado.'], 404);
        }else{
            return response()->json($data);
        }
    }
}
