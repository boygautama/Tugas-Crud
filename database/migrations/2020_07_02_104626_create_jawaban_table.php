<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJawabanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jawaban', function (Blueprint $table) {
            $table->bigIncrements('jawab_id', true)->unsigned();
            $table->text('jawab_isi');
            $table->timestamp('jawab_tgl')->useCurrent();
            $table->timestamp('jawab_update')->nullable();
            $table->string('jawab_nama', 255);
            $table->bigInteger('tanyaid')->unsigned();
            $table->foreign('tanyaid')->references('tanya_id')->on('pertanyaan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jawaban');
    }
}
