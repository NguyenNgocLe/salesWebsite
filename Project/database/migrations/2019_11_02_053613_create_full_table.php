<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFullTable extends Migration
{
    public function up()
    {
        Schema::create('linh_vuc', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ten_linh_vuc');
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('cau_hoi', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('linh_vuc_id');
            $table->string('noi_dung');
            $table->string('phuong_an_a');
            $table->string('phuong_an_b');
            $table->string('phuong_an_c');
            $table->string('phuong_an_d');
            $table->string('dap_an');
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('nguoi_choi', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ten_dang_nhap');
            $table->string('mat_khau');
            $table->string('email');
            $table->string('hinh_dai_dien');
            $table->integer('diem_cao_nhat');
            $table->integer('credit');
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('goi_credit', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ten_goi');
            $table->integer('credit');
            $table->integer('so_tien');
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('lich_su_mua_credit', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ten_goi');
            $table->integer('credit');
            $table->integer('so_tien');
        });
        
        Schema::create('luot_choi', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('nguoi_choi_id');
            $table->integer('so_cau');
            $table->string('diem');
            $table->string('ngay_gio');
            $table->timestamps();
        });

        Schema::create('chi_tiet_luot_choi', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('luot_choi_id');
            $table->integer('cau_hoi_id');
            $table->string('phuong_an');
            $table->integer('diem');
            $table->timestamps();
        });

        Schema::create('cau_hinh_diem_cau_hoi', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('thu_tu');
            $table->integer('diem');
            $table->timestamps();
        });

        Schema::create('cau_hinh_app', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('co_hoi_sai');
            $table->integer('thoi_gian_tra_loi');
            $table->timestamps();
        });

        Schema::create('quan_tri_vien', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ten_dang_nhap');
            $table->string('mat_khau');
            $table->string('ho_ten');
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('cau_hinh_tro_giup', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('loai_tro_giup');
            $table->integer('thu_tu');
            $table->integer('credit');
            $table->timestamps();
        });
    }
}
?>