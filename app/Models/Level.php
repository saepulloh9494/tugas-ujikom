<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
  use HasFactory;

  protected $table = 'level';
  protected $primaryKey = 'id_level';
  protected $fillable = ['level'];

  public function petugas()
  {
    return $this->hasMany(Petugas::class, 'level');
  }

  public function managers()
  {
    return $this->hasMany(Manager::class, 'level');
  }
}
