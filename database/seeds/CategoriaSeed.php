<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriaSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categorias')->insert(
            [
                'categoria'=>'Peça',
                'dsc_categoria'=>'Peças de produtos',
                'ativo'=> true
            ]
        );
        $this->command->info('Categoria cadastrada com sucesso!');

        DB::table('categorias')->insert(
            [
                'categoria'=>'Equipamento',
                'dsc_categoria'=>'Equipamento',
                'ativo'=> true
            ]
        );
        $this->command->info('Categoria cadastrada com sucesso!');

        DB::table('categorias')->insert(
            [
                'categoria'=>'Produto',
                'dsc_categoria'=>'Produto especifico',
                'ativo'=> true
            ]
        );
        $this->command->info('Categoria cadastrada com sucesso!');
    }
}
