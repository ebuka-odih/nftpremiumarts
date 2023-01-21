<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NFTListing extends Model
{
    protected $guarded = [];

    public function payment_method()
    {
        return $this->belongsTo(PaymentMethod::class, "payment_method_id");
    }
}
