<?php

namespace Database\Seeders;

use App\Models\Categoria;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Categoria::create([
            'nome' => 'Lanches',
            'descricao' => 'Lanches deliciosos e variados',
            'ativo' => true,
            'ordem_exibicao' => 1
        ]);

          Categoria::create([
            'nome' => 'Porções',
            'descricao' => 'Porções deliciosas e variadas',
            'ativo' => true,
            'ordem_exibicao' => 2
        ]);

            Categoria::create([
                'nome' => 'Bebidas',
                'descricao' => 'Bebidas deliciosas e variadas',
                'ativo' => true,
                'ordem_exibicao' => 3
            ]);
            
    }
}
