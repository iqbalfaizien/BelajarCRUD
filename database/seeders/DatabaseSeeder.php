<?php

namespace Database\Seeders;

use App\Models\Anggota;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

     Anggota::create([
        'nama' => 'Iqbal Faizien',
        'hp' => '082123590411'
     ]);
     Anggota::create([
        'nama' => 'John Cena',
        'hp' => '083254099021'
     ]);
     Anggota::create([
        'nama' => 'Chris Jhon',
        'hp' => '082229899912'
     ]);
    }
}
