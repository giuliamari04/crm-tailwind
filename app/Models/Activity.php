<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Client;

class Activity extends Model
{
    use HasFactory;

    protected $table = 'activity';
    protected $fillable = [
        'client_id',
        'title',
        'small_description',
        'long_description',
        'subject',
        'start_date',
        'end_date',
        'type_comunication',
        'view_done',
        'semaforo',
    ];

    protected $dates = [
        'start_date',
        'end_date',
        'created_at',
        'updated_at',
    ];

    public function client()
    {
        return $this->belongsTo(Client::class);
    }
}
