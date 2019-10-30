<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Cliente;

class Documento extends Model
{
    protected $fillable = [
        'cliente_id',
        'cpf-cnpj',
    ];

    public function rules(){
        return [
            'cliente_id' => 'required',
            'cpf-cnpj' => 'required|unique:documentos',
        ];
    }

    public function cliente(){
        return $this->belongsTo(Cliente::class, 'cliente_id', 'id');
    }
}
