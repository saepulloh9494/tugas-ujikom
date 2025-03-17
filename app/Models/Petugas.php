<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Petugas extends Model
{
  use HasFactory;

  protected $table = 'petugas';
  protected $primaryKey = 'id_user';
  protected $fillable = ['nama_user', 'username', 'password', 'level'];

  public function level()
  {
    return $this->belongsTo(Level::class, 'level');
  }
}
