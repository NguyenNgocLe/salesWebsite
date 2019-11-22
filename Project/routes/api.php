<?php

use Illuminate\Http\Request;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::prefix('nguoi-choi.')->group(function(){
    Route::post('dang-nhap', 'API\NguoiChoiController@dangNhap');
    Route::get('lay-thong-tin', 'API\NguoiChoiController@layThongTin');
});
