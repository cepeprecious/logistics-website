<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\User;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
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
        'fee',
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

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
