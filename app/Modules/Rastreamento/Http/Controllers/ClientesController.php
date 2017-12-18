<?php

namespace App\Modules\Rastreamento\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Modules\Rastreamento\Services\ClientesService;

class ClientesController extends Controller
{
    protected $clientesService;
    
    public function __construct(ClientesService $clientesService)
    {
        $this->clientesService = $clientesService;
    }
    
    public function index()
    {
        return $this->clientesService->retornarClientes();
    }
    
    public function inserirCliente()
    {
        $this->clientesService->inserirClienteRastreado();
    }
}
