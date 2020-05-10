<?php

use Illuminate\Database\Seeder;

class AcervoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(\App\Models\Book $book)
    {
        $book->create( [
            "titulo" => "Senhor do Aneis",
            "ano" => "1980",
            "preco" => "20.50",
            "autor" => "Rick Riordan",
            "quantidade" => 2,
            "tipo" => 1,
            "idEditora" => "1",
        ]);

        $book->create( [
            "titulo" => "Senhor do Aneis: O Retorno do Rei",
            "ano" => "1989",
            "preco" => "350.00",
            "autor" => "Peter Jackson",
            "quantidade" => '10',
            "tipo" => '1',
            "idEditora" => "1",
        ]);

        $book->create( [
            "titulo" => "A volta dos que não foram",
            "ano" => '1200',
            "preco" => "200.00",
            "autor" => "Karl Marx",
            "quantidade" => '1',
            "tipo" => '2',
            "idEditora" => "2",
        ]);

        $book->create( [
            "titulo" => "Lords vs Jedis",
            "ano" => '2200',
            "preco" => "200.00",
            "autor" => "Epicuro",
            "quantidade" => '1',
            "tipo" => '2',
            "idEditora" => "2",
        ]);

        $book->create( [
            "titulo" => "Helenismo",
            "ano" => '2000',
            "preco" => "20.00",
            "autor" => "Talles de Mileto",
            "quantidade" => '1',
            "tipo" => '1',
            "idEditora" => "3",
        ]);
    }
}
