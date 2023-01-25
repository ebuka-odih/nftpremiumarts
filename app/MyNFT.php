<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MyNFT extends Model
{
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function sellnft()
    {
        return $this->belongsTo(SellNFT::class, 'sell_n_f_t_s_id');
    }

    public function status()
    {
        if ($this->status == 0){
            return "<span class='badge badge-warning text text-uppercase'>Pending</span>";
        }elseif ($this->status > 0){
            return "<span class='badge badge-success text text-uppercase'>Approved</span>";
        }else{
            return "<span class='badge badge-danger text text-uppercase'>Cancelled</span>";
        }
    }
}
