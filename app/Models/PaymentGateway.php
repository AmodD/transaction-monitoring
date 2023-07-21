<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentGateway extends Model
{
    use HasFactory;
    
    protected $fillable = ['name', 'code'];

    public function getNameAndCode(): string
    {
      return $this->name . ' ' . $this->code ;
    }
}
