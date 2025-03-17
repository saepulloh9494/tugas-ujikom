<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Item;

class ItemSeeder extends Seeder
{
  public function run()
  {
    $items = [
      ['nama_item' => 'Laptop', 'uom' => 'Unit', 'harga_beli' => 7000000, 'harga_jual' => 8500000],
      ['nama_item' => 'Printer', 'uom' => 'Unit', 'harga_beli' => 2000000, 'harga_jual' => 2500000],
      ['nama_item' => 'Mouse', 'uom' => 'Unit', 'harga_beli' => 150000, 'harga_jual' => 200000],
    ];

    foreach ($items as $item) {
      Item::create($item);
    }
  }
}
