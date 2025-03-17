<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Level;

class LevelSeeder extends Seeder
{
  public function run()
  {
    Level::create(['level' => 'Administrator']);
    Level::create(['level' => 'Manager']);
    Level::create(['level' => 'Staff']);
  }
}
