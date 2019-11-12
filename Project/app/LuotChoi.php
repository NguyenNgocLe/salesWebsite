<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LuotChoi extends Model
{
    protected $table = 'luot_choi';
    //
    public function cauHois()
    {
        return $this->belongsToMany("App\CauHoi", "chi_tiet_luot_choi");
    }

    public function nguoiChoi()
    {
        return $this->belongsTo('App\NguoiChoi');
    }
}
