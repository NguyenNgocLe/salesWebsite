<?php

Route::post('dang-nhap', 'API\NguoiChoiController@dangNhap');


Route::middleware(['gan.guard:api', 'jwt.auth'])->group(function(){
    Route::get('thong-tin', 'API\NguoiChoiController@layThongTin');
});
