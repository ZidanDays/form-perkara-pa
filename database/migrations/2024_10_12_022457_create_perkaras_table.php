<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePerkarasTable extends Migration
{
    public function up()
    {
        Schema::create('perkaras', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal');
            $table->string('nomor_perkara');
            $table->string('nama');
            $table->text('alamat');
            $table->string('nomor_telepon', 15);
            $table->enum('pihak', ['penggugat', 'pemohon', 'tergugat', 'termohon']);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('perkaras');
    }
}