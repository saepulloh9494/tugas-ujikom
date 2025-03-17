<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Identitas;

class IdentitasSeeder extends Seeder
{
  public function run()
  {
    Identitas::create([
      'nama_identitas' => 'Koperasi Pegawai',
      'badan_hukum' => '123456789',
      'npwp' => '987654321',
      'email' => 'koperasi@pegawai.com',
      'url' => 'http://koperasi-pegawai.com',
      'alamat' => 'Jl. Koperasi No.1',
      'telp' => '08123456789',
      'fax' => '021-123456',
      'rekening' => '1234567890',
      'foto' => null,
    ]);
  }
}
