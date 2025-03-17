<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Petugas;

class PetugasSeeder extends Seeder
{
  public function run()
  {
    Petugas::create([
      'nama_user' => 'Admin',
      'username' => 'admin',
      'password' => bcrypt('password'),
      'level' => 1
    ]);

    Petugas::create([
      'nama_user' => 'User',
      'username' => 'user',
      'password' => bcrypt('password'),
      'level' => 2
    ]);
  }
}
