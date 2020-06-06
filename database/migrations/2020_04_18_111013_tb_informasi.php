<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TbInformasi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_informasi', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('username', 50);
            $table->string('judul');
            $table->string('slug');
            $table->string('gambar')->nullable();;
            $table->text('konten');
            $table->string('kategori',50);
            $table->string('tag',50);
            $table->enum('status', ['draft', 'publish']);
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
        Schema::dropIfExists('tb_informasi');
    }
}
