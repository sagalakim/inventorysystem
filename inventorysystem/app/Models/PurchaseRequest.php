<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PurchaseRequest extends Model
{
    use HasFactory;

    protected $fillable = [
        'item_id',
        'requested_item_name',
        'requested_item_type',
        'unit',
        'item_description',
        'quantity',
        'balance',
        'status',
        'remarks'
    ];

}
