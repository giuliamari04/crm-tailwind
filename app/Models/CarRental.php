<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Client;

class CarRental extends Model
{
    use HasFactory;

    protected $table = 'sales_car_rental';
    protected $fillable = [
        'car_model',
        'rental_start_date',
        'rental_end_date',
        'client_id',
    ];

    protected $dates = [
        'rental_start_date',
        'rental_end_date',
        'created_at',
        'updated_at',
    ];

    public function client()
    {
        return $this->belongsTo(Client::class);
    }
}
