<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  public function up(): void
  {
    Schema::create('items', function (Blueprint $table) {
      $table->id('id_item');
      $table->string('nama_item');
      $table->string('uom');
      $table->decimal('harga_beli', 10, 2);
      $table->decimal('harga_jual', 10, 2);
      $table->timestamps();
    });
  }

  public function down(): void
  {
    Schema::dropIfExists('items');
  }
};
