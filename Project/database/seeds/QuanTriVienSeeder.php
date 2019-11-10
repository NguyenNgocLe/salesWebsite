<?php

use Illuminate\Database\Seeder;

class QuanTriVienSeeder extends Seeder
{
    
    public function run()
    {
        $matKhau = Hash::make('lengoc');
        DB::table('quan_tri_vien')->insert([
            ['ho_ten' => 'nguyenngocle', 'mat_khau' => $matKhau, 'ten_dang_nhap' => 'lengoc']
        ]);
    }
}
