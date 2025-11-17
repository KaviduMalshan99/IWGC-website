<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OnlinePayment extends Model
{
    protected $fillable = [
        'payee_name',
        'email',
        'phone',
        'address',
        'city',
        'postal_code',
        'reason',
        'currency',
        'amount',
        'transaction_id',
        'status',
        'receipt_no',
        'receipt_path', 
        'admin_status',
    ];

}
