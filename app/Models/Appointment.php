<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    //
    protected $guarded = [];

    public function customer() {
        return $this->belongsTo(Customer::class);
    }

    public function service() {
        return $this->belongsTo(Service::class);
    }
}
