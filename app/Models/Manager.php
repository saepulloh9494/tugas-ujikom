<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Manager extends Model
{
  use HasFactory;

  protected $table = 'manager';
  protected $primaryKey = 'id_user';
  protected $fillable = ['nama_user', 'username', 'password', 'level'];

  public function levelRelation()
  {
    return $this->belongsTo(Level::class, 'level');
  }
}
