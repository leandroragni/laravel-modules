<?php

namespace App\Modules\Rastreamento\Models;

use Illuminate\Database\Eloquent\Model;

class Rastreamento extends Model
{
    protected $table = 'rastreamentos';
    
    protected $fillable = ['id', 'nome_cliente', 'informacoes_rastreio', 'created_at', 'updated_at'];
}
