<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SellNFT extends Model
{

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
    public function adminStatus()
    {
        if ($this->status == 0){
            return "<span class='badge bg-warning text text-uppercase'>Pending</span>";
        }elseif ($this->status > 0){
            return "<span class='badge bg-success text text-uppercase'>Approved</span>";
        }else{
            return "<span class='badge bg-danger text text-uppercase'>Cancelled</span>";
        }
    }

    public function itemId()
    {
        return "#".$this->id."3294".$this->id;
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function mynft()
    {
        return $this->hasMany(MyNFT::class);
    }
}
