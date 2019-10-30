<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Filme;

class FilmeApiController extends MasterApiController
{
    protected $model;
    protected $path = 'filmes';
    protected $upload = 'capa';
    protected $width = 800;
    protected $height = 553;
    public function __construct(Filme $filme, Request $request)
    {
        $this->model = $filme;
        $this->request = $request;
    }
}
