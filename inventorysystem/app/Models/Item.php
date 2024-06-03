<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\PurchaseRequest;

class Item extends Model
{
    use HasFactory;

    protected $fillable = [
        'par_ics',
        'date_acquired',
        'stock_no',
        'item_type',
        'unit',
        'item_description',
        'quantity',
        'unit_cost',
        'status_remarks',
        'custodian_name',
        'balance',
    ];

    public function pr()
    {
        return $this->belongsTo(PurchaseRequest::class, 'id', 'item_id');
    }
}
