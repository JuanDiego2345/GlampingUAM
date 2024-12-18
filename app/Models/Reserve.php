<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reserve extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'cabin_id',
        'checkIn',
        'checkOut',
        'status',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function cabin()
    {
        return $this->belongsTo(Cabin::class, 'cabin_id');
    }

    
}
