<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Manager;

class ManagerSeeder extends Seeder
{
  public function run()
  {
    Manager::create([
      'nama_user' => 'Manager 1',
      'username' => 'manager1',
      'password' => bcrypt('manager123'),
      'level' => 1,
    ]);
  }
}
