<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CauHoi extends Model
{
    protected $table = 'cau_hoi';
    use SoftDeletes;
    //
    public function linhVuc()
    {
        return $this->belongsTo("App\LinhVuc");
    }

    public function luotChois()
    {
        return $this->belongsToMany("App\LuotChoi", "chi_tiet_cau_hoi");
    }
}
