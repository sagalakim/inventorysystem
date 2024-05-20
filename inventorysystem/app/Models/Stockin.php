<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stockin extends Model
{
    use HasFactory;

    protected $fillable = [
        'item_id',
        'po_number',
        'po_date',
        'stock_no',
        'type',
        'unit',
        'description',
        'quantity',
        'unit_cost',
        'status_remarks',
        'balance_after_receipt'
    ];
}
