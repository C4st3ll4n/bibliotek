<?php

use Illuminate\Database\Seeder;

class EditoraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(\App\Models\Editora $editora)
    {
        $editora->create([
            "nome"=>"Quintante"
        ]);

        $editora->create([
            "nome"=>"Março"
        ]);

        $editora->create([
            "nome"=>"Phylosophikl"
        ]);
    }
}
