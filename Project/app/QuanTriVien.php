<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class QuanTriVien extends Model
{
    protected $table = 'quan_tri_vien';
    use SoftDeletes;
}
