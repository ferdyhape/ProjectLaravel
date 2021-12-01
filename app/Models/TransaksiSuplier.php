<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransaksiSuplier extends Model
{
    use HasFactory;

    protected $fillable = [
        'supplier_name',
        'item_name',
        'price',
        'qty',
        'transaction_date',
    ];
    protected $guarded = ['id'];
}
