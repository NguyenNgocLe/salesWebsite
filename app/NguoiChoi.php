<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Tymon\JWTAuth\Contracts\JWTSubject;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class NguoiChoi extends Model 
//Authenticatable implements JWTSubject
{
    protected $table = 'nguoi_choi';
    protected $hidden = ['mat_khau'];
    use SoftDeletes;
    public function luotChois()
    {
        return $this->hasMany("App\LuotChoi");
    }
    public function gotCredits(){
        return $this->belongsToMany("App\GoiCredit", "lich_su_mua_credit");
    }

    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    public function getJWTCustomClaims()
    {
        return [];
    }

    public function getPasswordAttribute() 
    {
        return $this->mat_khau;
    }
}
