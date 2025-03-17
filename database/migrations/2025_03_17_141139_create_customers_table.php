<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  public function up(): void
  {
    Schema::create('customers', function (Blueprint $table) {
      $table->id('id_customer');
      $table->string('nama_customer');
      $table->text('alamat');
      $table->string('telp')->nullable();
      $table->string('fax')->nullable();
      $table->string('email')->nullable();
      $table->timestamps();
    });
  }

  public function down(): void
  {
    Schema::dropIfExists('customers');
  }
};
