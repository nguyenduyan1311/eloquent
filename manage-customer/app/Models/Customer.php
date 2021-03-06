<?php

namespace App\Models\Customer;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    /* The table associated with the model */
    protected $table = 'customer';
    public function city(){
        return $this->belongsTo('App\City');
    }
}
