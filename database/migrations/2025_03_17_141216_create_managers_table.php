<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  public function up(): void
  {
    Schema::create('manager', function (Blueprint $table) {
      $table->id('id_user');
      $table->string('nama_user');
      $table->string('username')->unique();
      $table->string('password');
      $table->unsignedBigInteger('level');
      $table->timestamps();

      $table->foreign('level')->references('id_level')->on('level')->onDelete('cascade');
    });
  }

  public function down(): void
  {
    Schema::dropIfExists('manager');
  }
};
