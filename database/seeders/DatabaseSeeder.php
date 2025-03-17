<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
  public function run()
  {
    $this->call([
      CustomerSeeder::class,
      SalesSeeder::class,
      ItemSeeder::class,
      TransactionSeeder::class,
      LevelSeeder::class,
      PetugasSeeder::class,
      ManagerSeeder::class,
      TransactionTempSeeder::class,
      IdentitasSeeder::class,
    ]);
  }
}
