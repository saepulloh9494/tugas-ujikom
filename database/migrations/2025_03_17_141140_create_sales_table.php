<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  public function up(): void
  {
    Schema::create('sales', function (Blueprint $table) {
      $table->id('id_sales');
      $table->date('tgl_sales');
      $table->unsignedBigInteger('id_customer');
      $table->string('nama_sales')->nullable();
      $table->string('do_number')->unique();
      $table->enum('status', ['pending', 'completed', 'cancelled'])->default('pending');
      $table->timestamps();

      $table->foreign('id_customer')->references('id_customer')->on('customers')->onDelete('cascade');
    });
  }

  public function down(): void
  {
    Schema::dropIfExists('sales');
  }
};
