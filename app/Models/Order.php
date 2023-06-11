<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'receiver_name',
        'receiver_number',
        'receiver_address',
        'receiver_city',
        'receiver_state',
        'receiver_zip_code',
        'sender_name',
        'sender_number',
        'sender_email',
        'sender_address',
        'sender_city',
        'sender_state',
        'sender_zip_code',
        'delivery_options',
        'item_name',
        'quantity',
        'item_category',
        'weight',
        'item_value',
        'bags_specification',
        'remarks',
        'tracking_number',
        'status',
    ];
}
