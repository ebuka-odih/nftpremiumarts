<?php

namespace App;

use AmrShawky\LaravelCurrency\Facade\Currency;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;
    protected $appends = ['referral_link'];
    protected $with = ['referredBy'];
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
//    protected $fillable = [
//        'name', 'email', 'password',
//    ];
        protected $guarded = [];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function fullname()
    {
        $fullname = $this->firstname." ".$this->lastname;
        return $fullname;
    }



    public function referrer()
    {
        return $this->belongsTo(User::class, 'referrer_id', 'id');
    }

    public function referrals()
    {
        return $this->hasMany(User::class, 'referrer_id', 'id');
    }

    public function all_referrals()
    {
        $refs = User::whereReferredBy($this->id)->get();
        return $refs;
    }

    public function referredBy()
    {
        return $this->belongsTo(User::class, 'referred_by', 'id');
    }
    public function getReferralLinkAttribute()
    {
        return $this->referral_link = route('register', ['ref' => $this->username, 'id'=> $this->id]);
    }

    public function status()
    {
        if ($this->status < 0){
            return "<span class='user-status user-status-unverified'>Unverified</span>";
        }elseif ($this->status >= 0){
            return "<span class='user-status user-status-verified'>Verified</span>";
        }else{
            return "<span class='badge bg-warning text text-uppercase'>Blocked</span>";
        }
    }

    public function withdrawal()
    {
        return $this->hasMany(Withdrawal::class, 'user_id');
    }
    public function deposit()
    {
        return $this->hasMany(Deposit::class, 'user_id');
    }
    public function funding()
    {
        return $this->hasMany(Funding::class, 'user_id');
    }
    public function collectable()
    {
        return $this->hasMany(Collectable::class, 'user_id');
    }
    public function buy4me()
    {
        return $this->hasMany(Buy4Me::class, 'user_id');
    }
    public function sellnft()
    {
        return $this->hasMany(SellNFT::class, 'user_id');
    }

    public function getProfilePicAttribute($value) {
        if(!$this->attributes['avatar']) {
            $colors = ['E91E63', '9C27B0', '673AB7', '3F51B5', '0D47A1', '01579B', '00BCD4', '009688', '33691E', '1B5E20', '33691E', '827717', 'E65100',  'E65100', '3E2723', 'F44336', '212121'];
            $background = $colors[$this->id%count($colors)];
            return "https://ui-avatars.com/api/?size=256&background=".$background."&color=fff&name=".urlencode($this->name);
        }
        return '/avatar/' . $this->attributes['avatar'];
    }

    public function showRate()
    {
        $currency = Currency::convert()
            ->from('USD')
            ->to('ETH')
            ->source('crypto')
            ->withoutVerifying()
            ->get();
        return floor($currency * $this->balance);
    }

//    public function showRate() {
//
//        $url = "https://api.coingecko.com/api/v3/simple/price?ids=ethereum&vs_currencies=usd";
//        $data = json_decode(file_get_contents($url));
//        return $data->ethereum->usd;
//    }


}


