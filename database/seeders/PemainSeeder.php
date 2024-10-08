<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Pemain;

class PemainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
    }

    public function run()
{
    Pemain::insert([
        ['nama_pemain' => 'Bruno Fernandes', 'no_punggung' => 8, 'posisi' => 'Gelandang'],
        ['nama_pemain' => 'Marcus Rashford', 'no_punggung' => 10, 'posisi' => 'Penyerang'],
        ['nama_pemain' => 'Casemiro', 'no_punggung' => 18, 'posisi' => 'Gelandang'],
        ['nama_pemain' => 'Raphaël Varane', 'no_punggung' => 19, 'posisi' => 'Bek'],
        ['nama_pemain' => 'David de Gea', 'no_punggung' => 1, 'posisi' => 'Kiper'],
    ]);
}
}




