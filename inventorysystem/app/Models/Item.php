<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\PurchaseRequest;

class Item extends Model
{
    use HasFactory;

    protected $fillable = [
        'item_name',
        'item_type',
        'unit',
        'item_description',
        'quantity',
        'balance',
    ];

    public function pr()
    {
        return $this->belongsTo(PurchaseRequest::class, 'id', 'item_id');
    }
}
