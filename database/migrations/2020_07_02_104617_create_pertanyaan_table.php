<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePertanyaanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pertanyaan', function (Blueprint $table) {
            $table->bigIncrements('tanya_id');
            $table->string('tanya_judul', 255)->nullable();
            $table->text('tanya_isi')->nullable();
            $table->timestamp('tanya_tgl')->useCurrent();
            $table->timestamp('tanya_update')->nullable();
            $table->string('tanya_nama', 255)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pertanyaan');
    }
}
