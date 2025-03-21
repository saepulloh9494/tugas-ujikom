<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  public function up(): void
  {
    Schema::create('transactions', function (Blueprint $table) {
      $table->id('id_transaction');
      $table->unsignedBigInteger('id_sales');
      $table->unsignedBigInteger('id_customer');
      $table->unsignedBigInteger('id_item');
      $table->integer('quantity');
      $table->decimal('price', 10, 2);
      $table->decimal('amount', 10, 2);
      $table->uuid('session_id');
      $table->timestamps();

      $table->foreign('id_sales')->references('id_sales')->on('sales')->onDelete('cascade');
      $table->foreign('id_customer')->references('id_customer')->on('customers')->onDelete('cascade');
      $table->foreign('id_item')->references('id_item')->on('items')->onDelete('cascade');
    });
  }

  public function down(): void
  {
    Schema::dropIfExists('transactions');
  }
};
