<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransactionTemp extends Model
{
  use HasFactory;

  protected $table = 'transaction_temp';
  protected $primaryKey = 'id_transaction';
  protected $fillable = ['id_item', 'quantity', 'price', 'amount', 'session_id', 'remark'];

  public function item()
  {
    return $this->belongsTo(Item::class, 'id_item');
  }
}
