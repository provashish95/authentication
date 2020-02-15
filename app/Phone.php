<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
    protected $fillable = [
        'customer_id', 'phone',
    ];
    public function customer(){
        return $this->belongsTo(Customer::class);
    }
}
