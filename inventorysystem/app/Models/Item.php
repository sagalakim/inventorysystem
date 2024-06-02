<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\PurchaseRequest;

class Item extends Model
{
    use HasFactory;

    protected $fillable = [
        'po_number',
        'po_date',
        'stock_no',
        'item_type',
        'unit',
        'item_description',
        'quantity',
        'unit_cost',
        'status_remarks',
        'balance',
    ];

    public function pr()
    {
        return $this->belongsTo(PurchaseRequest::class, 'id', 'item_id');
    }
}
