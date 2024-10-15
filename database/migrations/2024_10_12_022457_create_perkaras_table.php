<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePerkarasTable extends Migration
{
    public function up()
    {
        Schema::create('perkaras', function (Blueprint $table) {
            $table->id(); // Primary key ID
            $table->date('tanggal'); // Tanggal perkara
            $table->string('nomor_perkara'); // Nomor perkara
            $table->string('nama'); // Nama pengaju (bisa Penggugat/Pemohon)
            $table->text('alamat'); // Alamat pengaju
            $table->string('nomor_telepon', 15); // Nomor telepon pengaju
            $table->enum('pihak', ['penggugat', 'pemohon', 'tergugat', 'termohon', 'lainnya']); // Status pihak (penggugat/pemohon/tergugat/termohon)
            
            // Menambahkan kolom baru
            $table->string('nama_penggugat')->nullable(); // Nama penggugat (opsional untuk nullable)
            $table->string('nama_tergugat')->nullable(); // Nama tergugat (opsional untuk nullable)
            $table->string('nama_ketua_majelis')->nullable(); // Nama ketua majelis (opsional untuk nullable)
    
            $table->timestamps(); // Timestamps (created_at, updated_at)
        });
    }
    

    public function down()
    {
        Schema::dropIfExists('perkaras');
    }
}