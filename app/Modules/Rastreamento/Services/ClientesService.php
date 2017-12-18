<?php

namespace App\Modules\Rastreamento\Services;

use App\Modules\Rastreamento\Models\Rastreamento;
use App\Modules\Rastreamento\Repositories\RastreamentoRepository;

class ClientesService
{
    protected $rastreamentoRepository;
    
    public function __construct(RastreamentoRepository $rastreamentoRepository)
    {
        $this->rastreamentoRepository = $rastreamentoRepository;
    }
    
    public function retornarClientes()
    {
        $listaDeRastreamentos = $this->rastreamentoRepository->listarRastreamentos();
        
        return $listaDeRastreamentos;
    }
    
    public function inserirClienteRastreado()
    {
        $this->rastreamentoRepository->inserirNovoCliente($this->novoCliente());
    }
    
    private function novoCliente()
    {
        $novoRastreamento = new Rastreamento([
            'nome_cliente' => 'cliente inserido 2', 
            'informacoes_rastreio' => '{"site":"teste cliente inserido 2"}'
            ]
        );

        return $novoRastreamento;
    }
}
