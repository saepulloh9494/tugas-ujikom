<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  public function up(): void
  {
    Schema::create('transaction_temp', function (Blueprint $table) {
      $table->id('id_transaction');
      $table->unsignedBigInteger('id_item');
      $table->integer('quantity');
      $table->decimal('price', 10, 2);
      $table->decimal('amount', 10, 2);
      $table->uuid('session_id');
      $table->text('remark')->nullable();
      $table->timestamps();

      $table->foreign('id_item')->references('id_item')->on('items')->onDelete('cascade');
    });
  }

  public function down(): void
  {
    Schema::dropIfExists('transaction_temp');
  }
};
