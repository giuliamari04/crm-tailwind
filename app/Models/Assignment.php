<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use app\Models\Client;
class Assignment extends Model
{
    use HasFactory;

    protected $table = 'assignments';
    protected $fillable = [
        'client_id',
        'resource_id',
        'resource_type',
        'assigned_to_id',
        'assignment_date',
        'return_date',
    ];

    protected $dates = [
        'assignment_date',
        'return_date',
        'created_at',
        'updated_at',
    ];

    public function clients()
    {
        return $this->hasMany(Client::class);
    }
}
