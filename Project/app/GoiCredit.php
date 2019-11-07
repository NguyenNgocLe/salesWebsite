<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class GoiCredit extends Model
{
    protected $table = 'goi_credit';
    use SoftDeletes;
    // 
    public function nguoiChois()
    {
        return $this->belongsToMany("App\NguoiChoi", "lich_su_mua_credit");
    }
}
