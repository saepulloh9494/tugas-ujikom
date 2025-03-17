<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Sales;
use App\Models\Customer;

class SalesSeeder extends Seeder
{
  public function run()
  {
    $customers = Customer::all();

    foreach ($customers as $customer) {
      Sales::create([
        'tgl_sales' => now(),
        'id_customer' => $customer->id_customer,
        'do_number' => strtoupper(uniqid('DO')),
        'status' => 'pending',
      ]);
    }
  }
}
