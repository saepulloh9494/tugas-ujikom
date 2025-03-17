<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
  use HasFactory;

  protected $table = 'items';
  protected $primaryKey = 'id_item';
  protected $fillable = ['nama_item', 'uom', 'harga_beli', 'harga_jual'];

  public function transactions()
  {
    return $this->hasMany(Transaction::class, 'id_item');
  }
}
