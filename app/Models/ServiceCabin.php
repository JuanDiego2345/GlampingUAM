<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceCabin extends Model
{
    use HasFactory;

    protected $table = 'service_cabin';
    protected $fillable = ['id_cabin', 'id_service', 'name'];

    public function cabin()
    {
        return $this->belongsTo(Cabin::class);
    }

    public function service()
    {
        return $this->belongsTo(Service::class);
    }
}
