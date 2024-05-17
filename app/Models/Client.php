<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Activity;
use App\Models\Stage;
use App\Models\Selling;
use App\Models\Dpi;
use App\Models\CarRental;
use App\Models\Assignment;

class Client extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'name',
        'email',
        'phone_number',
        'industry',
        'address',
        'city',
        'postal_code',
        'province',
        'country',
        'website',
        'social_media',
        'description',
        'imageLogo',
        'p_iva',
        'date_start',
        'date_end',
        'status',
    ];

    protected $dates = [
        'date_start',
        'date_end',
        'created_at',
        'updated_at',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function activity()
    {
        return $this->hasMany(Activity::class);
    }

    public function selling()
    {
        return $this->hasMany(Selling::class);
    }
    public function dpi()
    {
        return $this->hasMany(Dpi::class);
    }

    public function car_rental()
    {
        return $this->hasMany(CarRental::class);
    }

    public function assignment()
    {
        return $this->hasMany(Assignment::class);
    }
}
