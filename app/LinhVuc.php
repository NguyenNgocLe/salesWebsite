<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class LinhVuc extends Model
{
    protected $table = 'linh_vuc';
    use SoftDeletes;
    // 
    public function cauHois()
    {
        return $this->hasMany('App\CauHoi');
    }
    public function LinhVuc(){
        return $this->belongsTo('App\LinhVuc');
    }
}
