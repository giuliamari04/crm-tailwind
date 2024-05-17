<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Client;

class Dpi extends Model
{
    use HasFactory;

    protected $table = 'sales_dpi';
    protected $fillable = [
        'code',
        'description',
        'quantity',
        'unit_price',
    ];
    public function client()
    {
        return $this->belongsTo(Client::class);
    }
}
