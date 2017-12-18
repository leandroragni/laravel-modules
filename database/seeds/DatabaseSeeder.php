<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RastreamentoTableSeeder::class);
    }
}

class RastreamentoTableSeeder extends Seeder
{
    public function run()
    {
        DB::insert('insert into rastreamentos (nome_cliente, informacoes_rastreio) values (?, ?)', ['cliente um', '{"site": "teste um"}']);
        DB::insert('insert into rastreamentos (nome_cliente, informacoes_rastreio) values (?, ?)', ['cliente dois', '{"site": "teste dois"}']);
        DB::insert('insert into rastreamentos (nome_cliente, informacoes_rastreio) values (?, ?)', ['cliente três', '{"site": "teste três"}']);
    }
}
