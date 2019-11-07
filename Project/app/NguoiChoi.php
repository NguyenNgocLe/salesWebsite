<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class NguoiChoi extends Model
{
    protected $table = 'nguoi_choi';
    use SoftDeletes;
    public function luotChois()
    {
        return $this->hasMany("App\LuotChoi");
    }
    public function gotCredits(){
        return $this->belongsToMany("App\GoiCredit", "lich_su_mua_credit");
    }
}
