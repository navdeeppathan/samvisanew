<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable = [
        'application_id',
        'stripe_payment_intent_id',
        'stripe_session_id',
        'amount',
        'currency',
        'status',
        'customer_email',
        'payment_method',
        'type'
    ];
}
