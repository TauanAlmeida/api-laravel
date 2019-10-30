<?php

namespace App\Http\Controllers;

use App\Http\Controllers\MasterApiController;
use Illuminate\Http\Request;
use App\Models\Documento;

class DocumentoApiController extends MasterApiController
{
    protected $model;
    protected $path;
    protected $upload;
   
    public function __construct(Documento $doc, Request $request)
    {
        $this->model = $doc;
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
