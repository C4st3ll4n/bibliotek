<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('acervo', function (Blueprint $table) {
            $table->increments("id");

            $table->integer("idEditora")->unsigned();
            $table->foreign("idEditora")->references("id")->on("editora")->onDelete('cascade');

            $table->string("titulo",100)->nullable(false);
            $table->string("autor",60);
            $table->integer("ano")->unsigned();
            $table->double("preco",10,2)->unsigned();
            $table->integer("quantidade")->unsigned();
            $table->integer("tipo")->unsigned();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('book');
    }
}
