<?php

namespace Database\Seeders;

use App\Models\Categoria;
use App\Models\Produto;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProdutoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $produtos = [
            'Lanches' => [
                [
                    'nome' => 'X-Burguer',
                    'descricao' => 'Delicioso hambúrguer com queijo, alface e tomate.',
                    'preco' => 18.90,
                    'destaque' => true,
                    'destaque' => true
                ],

                [
                    'nome' => 'X-Salada',
                    'descricao' => 'Hambúrguer com salada fresca e molho especial.',
                    'preco' => 17.99,
                    'destauqe' => true,
                    'destaque' => false
                ],

                [
                    'nome' => 'X-Bacon',
                    'descricao' => 'Hambúrguer com bacon crocante e queijo derretido.',
                    'preco' => 19.99,
                    'destaque' => false
                ]
            ],

            'Porções' => [
                [
                    'nome' => 'Batata Frita',
                    'descricao' => 'Porção de batatas fritas crocantes.',
                    'preco' => 28.50,
                    'destaque' => false
                ],

                [
                    'nome' => 'Frango à Passarinho',
                    'descricao' => 'Frango frito temperado com ervas.',
                    'preco' => 31.00,
                    'destaque' => true
                ],

                [
                    'nome' => 'Calabresa Acebolada',
                    'descricao' => 'Porção de calabresa com cebola caramelizada.',
                    'preco' => 28.00,
                    'destaque' => false
                ]
            ],

            'Bebidas' => [
                [
                    'nome' => 'Refrigerante Lata',
                    'descricao' => 'Refrigerante gelado em lata.',
                    'preco' => 5.00,
                    'destaque' => false
                ],

                [
                    'nome' => 'Suco Natural',
                    'descricao' => 'Suco feito com frutas frescas.',
                    'preco' => 7.50,
                    'destaque' => true
                ],

                [
                    'nome' => 'Água Mineral',
                    'descricao' => 'Água mineral sem gás.',
                    'preco' => 3.00,
                    'destaque' => false
                ]
            ],

            'Sobremesas' => [
                [
                    'nome' => 'Sorvete',
                    'descricao' => 'Sorvete cremoso de diversos sabores.',
                    'preco' => 12.00,
                    'destaque' => false
                ],

                [
                    'nome' => 'Pudim',
                    'descricao' => 'Pudim de leite condensado com calda de caramelo.',
                    'preco' => 10.00,
                    'destaque' => true
                ],

                [
                    'nome' => 'Brownie',
                    'descricao' => 'Brownie de chocolate com nozes.',
                    'preco' => 11.50,
                    'destaque' => false
                ]
            ],


        ];

        foreach ($produtos as $nomeCategoria => $itens) {
            $categoria = Categoria::where('nome', $nomeCategoria)->firstOrFail();
            foreach ($itens as $poduto) {
                Produto::Create(
                    [

                        'categoria_id' => $categoria->id,
                        'nome' => $poduto['nome'],
                        'descricao' => $poduto['descricao'],
                        'preco' => $poduto['preco'],
                        'caminho_imagem' => null,
                        'ativo' => true,
                        'destaque' => $poduto['destaque']
                    ]
                );
            }
        }
    }
}
