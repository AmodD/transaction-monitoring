<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'payment_gateway', 'transaction_id', 'token_requester_id', 'expiry_token','consent_flag', 'transaction_status', 'transaction_date'
    ];

    public function getStatusColorAttribute()
    {
      return [
        'successfull' => 'green',
        'pending' => 'yellow',
        'failed' => 'red', 
      ][$this->transaction_status] ?? 'grey';
    }

}
