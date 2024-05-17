<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Selling extends Model
{
    use HasFactory;

    protected $table = 'selling';
    protected $fillable = [
        'client_id',
        'amount',
        'creation_date',
        'stage_id',
        'lost',
        'closed',
    ];

    protected $dates = [
        'creation_date',
        'created_at',
        'updated_at',
    ];

    public function stage()
    {
        return $this->belongsTo(Stage::class);
    }
    public function client()
    {
        return $this->belongsTo(Client::class);
    }
}
