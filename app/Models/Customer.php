<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
  use HasFactory;

  protected $table = 'customers';
  protected $primaryKey = 'id_customer';
  protected $fillable = ['nama_customer', 'alamat', 'telp', 'fax', 'email'];

  public function sales()
  {
    return $this->hasMany(Sales::class, 'id_customer');
  }
}
