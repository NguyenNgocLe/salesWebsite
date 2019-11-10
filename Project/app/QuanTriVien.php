<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;

class QuanTriVien extends Authenticatable
{
    protected $table = 'quan_tri_vien';
    use SoftDeletes;

    public function redirectTo($request){
        return route('layout');
    }

    public function getPasswordAttribute(){
        return $this->mat_khau;
    }
}
