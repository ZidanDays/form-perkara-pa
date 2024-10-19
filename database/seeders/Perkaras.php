<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class Perkaras extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('perkaras')->insert([
            [
                'tanggal' => now(),
                'nomor_perkara' => '123/Pdt.G/2024/PN.XYZ',
                'nomor_akta' => 'AKT123456',
                'nama' => 'Ahmad Fauzi',
                'alamat' => 'Jalan Merdeka No.10, Jakarta',
                'nomor_telepon' => '081234567890',
                'pihak' => 'penggugat',
                'nama_penggugat' => 'Ahmad Fauzi',
                'nama_tergugat' => 'Indra Kusuma',
                'nama_ketua_majelis' => 'Sri Wahyuni',
                'created_at' => now(),
                'updated_at' => now(),

            ],
            [
                'tanggal' => now(),
                'nomor_perkara' => '456/Pdt.G/2024/PN.XYZ',
                'nomor_akta' => 'AKT7891011',
                'nama' => 'Ratna Sari',
                'alamat' => 'Jalan Sudirman No.20, Bandung',
                'nomor_telepon' => '081987654321',
                'pihak' => 'pemohon',
                'nama_penggugat' => 'Ratna Sari',
                'nama_tergugat' => 'Andi Wijaya',
                'nama_ketua_majelis' => 'Budi Santoso',
                'created_at' => now(),
                'updated_at' => now(),

            ],
        ]);
    }
}