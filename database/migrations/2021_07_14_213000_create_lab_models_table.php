<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLabModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laboratorio', function (Blueprint $table) {
            $table->id();
            $table->string('descricao',80);
            $table->string('categoria',20);
            $table->string('nivel',15);
            $table->integer('form_id');
            $table->integer('indi_id');
            $table->integer('cont_id');
            $table->string('iframe');
            $table->float('ordem');
            $table->string('operador',30);
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
        Schema::dropIfExists('laboratorio');
    }
}
