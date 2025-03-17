<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Customer;

class CustomerSeeder extends Seeder
{
  public function run()
  {
    $customers = [
      ['nama_customer' => 'PT. ABC', 'alamat' => 'Jl. Merdeka No.1', 'telp' => '081234567890', 'fax' => '021123456', 'email' => 'abc@company.com'],
      ['nama_customer' => 'CV. XYZ', 'alamat' => 'Jl. Sudirman No.2', 'telp' => '082345678901', 'fax' => '021654321', 'email' => 'xyz@business.com'],
    ];

    foreach ($customers as $customer) {
      Customer::create($customer);
    }
  }
}
