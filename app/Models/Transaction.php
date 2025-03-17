<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
  use HasFactory;

  protected $table = 'transactions';
  protected $primaryKey = 'id_transaction';
  protected $fillable = ['id_sales', 'id_customer', 'id_item', 'quantity', 'price', 'amount', 'session_id'];

  public function sales()
  {
    return $this->belongsTo(Sales::class, 'id_sales');
  }

  public function customer()
  {
    return $this->belongsTo(Customer::class, 'id_customer');
  }

  public function item()
  {
    return $this->belongsTo(Item::class, 'id_item');
  }
}
