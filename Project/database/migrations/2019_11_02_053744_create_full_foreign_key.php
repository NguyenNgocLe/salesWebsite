<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFullForeignKey extends Migration
{
    
    public function up()
    {
        Schema::table('luot_choi', function (Blueprint $table) {
            $table->foreign('nguoi_choi_id')->references('id')->on('nguoi_choi');
        });

        Schema::table('cau_hoi', function (Blueprint $table) {
            $table->foreign('linh_vuc_id')->references('id')->on('linh_vuc');
        });

        Schema::table('chi_tiet_luot_choi', function (Blueprint $table) {
            $table->foreign('cau_hoi_id')->references('id')->on('cau_hoi');
            $table->foreign('luot_choi_id')->references('id')->on('luot_choi');
        });

        Schema::table('lich_su_mua_credit', function (Blueprint $table) {
            $table->foreign('nguoi_choi_id')->references('id')->on('nguoi_choi');
            $table->foreign('goi_credit_id')->references('id')->on('goi_credit');
        });
    }
}
