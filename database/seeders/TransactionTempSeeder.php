<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class TransactionTempSeeder extends Seeder
{
  public function run()
  {
    DB::table('transaction_temp')->insert([
      'id_item'    => 1,
      'quantity'   => 2,
      'price'      => 8500000.00,
      'amount'     => 25500000,
      'session_id' => Str::uuid(),
      'remark'     => 'Temporary transaction',
      'created_at' => now(),
      'updated_at' => now(),
    ]);
  }
}
