<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stockout extends Model
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
        'received_by',
        'no_of_units_received',
        'date_received',
    ];
}
