<?php

namespace App\Modules\Rastreamento\Repositories;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Modules\Rastreamento\Models\Rastreamento;

class RastreamentoRepository
{
    protected $rastreamento;
    
    public function __contruct(
        Rastreamento $rastreamento
    ) {
        $this->rastreamento = $rastreamento;
    }
    
    public function listarRastreamentos()
    {
        $resultado = DB::table('rastreamentos')->get();
        
        return $resultado;
    }
    
    public function inserirNovoCliente(Rastreamento $model)
    {
        /*DB::table('rastreamentos')->insert([
                'nome_cliente' => $model->nome_cliente,
                'informacoes_rastreio' => $model->informacoes_rastreio,
            ]
        );*/
        $model->save();
    }
}
