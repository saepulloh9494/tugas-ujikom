<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Transaction;
use App\Models\Sales;
use App\Models\Item;
use Illuminate\Support\Str;

class TransactionSeeder extends Seeder
{
  public function run()
  {
    $sales = Sales::with('customer')->get();
    $items = Item::all();

    if ($items->isEmpty()) {
      $this->command->warn("Tidak ada item tersedia. Seeder TransactionSeeder dilewati.");
      return;
    }

    foreach ($sales as $sale) {
      if (!$sale->customer) {
        continue;
      }

      // Ambil item secara acak
      $item = $items->random();

      // Buat transaksi
      Transaction::create([
        'id_sales' => $sale->id_sales,
        'id_customer' => $sale->id_customer,
        'id_item' => $item->id_item, // Tambahkan id_item
        'quantity' => rand(1, 5),
        'price' => $item->harga_jual,
        'amount' => rand(1, 5) * $item->harga_jual,
        'session_id' => Str::uuid(),
        'created_at' => now(),
        'updated_at' => now(),
      ]);
    }
  }
}
