<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        \App\Models\User::insert(
            [
                [
                    'name' => 'Juragan Albern',
                    'email' => 'alberntzy@gmail.com',
                    'password' => '#hok123ben',
                ]
            ]
        );

        \App\Models\Barang::insert(
            [
                [
                    'kode_barang' => 'L09BB1',
                    'nama_barang' => 'Kopi',
                    'tanggal_pembelian' => '21/11/2023',
                    'type_barang' => 'Minuman',
                    'harga_barang' => '3.000 RP',
                    'jumlah' => '2',
                    'keterangan' => 'Untuk A Mirza dan Pak Rio',
                    'kode_investaris' => 'L01',
                ]
            ]
        );

        \App\Models\Pinjaman::insert(
            [
                [
                    'tanggalPinjam' => '21/11/2023',
                    'barang_id' => '1',
                    'jumlah' => '1',
                    'user_id' => '1',
                    'keterangan' => 'Buat A Mirza',
                    'tanggalKembali' => '21/11/2023',
                ]
            ]
        );

        \App\Models\ruang::insert(
            [
                [
                    'nama_ruang' => 'Lab TIK',
                    'tanggal' => '21/11/2023',
                ]
            ]
        );
    }
}
