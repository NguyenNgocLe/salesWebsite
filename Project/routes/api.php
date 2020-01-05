<?php

Route::get('dang-nhap', 'API\NguoiChoiController@dangNhap');


Route::middleware(['gan.guard:api', 'jwt.auth'])->group(function () {
    Route::get('thong-tin', 'API\NguoiChoiController@layThongTin');
});
//
Route::prefix('nguoi-choi')->group(function () {
    Route::get('danh-sach', 'API\NguoiChoiController@listUser');
    Route::get('danh-sach/{id}', 'API\NguoiChoiController@getListUserById');
    Route::get('danh-sach-nguoi-choi', 'API\NguoiChoiController@getListUserByIdParameter');
    Route::post('kiem-tra-dang-nhap', 'API\NguoiChoiController@checkLogin');
    Route::post('dang-nhap', 'API\NguoiChoiController@dangNhap');
    Route::post('dang-ky', 'API\NguoiChoiController@singUp');
    Route::post('them-moi', 'API\NguoiChoiController@store');
    Route::post('cap-nhat', 'API\NguoiChoiController@update');
    Route::post('cap-nhat-mat-khau', 'API\NguoiChoiController@updatePassword');
    Route::post('cap-nhat-credit', 'API\NguoiChoiController@updateCredit');
    Route::post('tim-kiem', 'API\NguoiChoiController@getUser');
    Route::post('luu-anh', 'API\NguoiChoiController@upload');
});
//
Route::prefix('luot-choi')->group(function () {
    Route::get('danh-sach', 'API\LuotChoiController@listPlay');
    Route::get('danh-sach/{id}', 'API\LuotChoiController@listPlayById');
    Route::post('them-moi', 'API\LuotChoiController@addPlay');
});
//
Route::prefix('linh-vuc')->group(function () {
    Route::get('danh-sach', 'API\LinhVucController@listField');
});
//
Route::prefix('cau-hoi')->group(function () {
    Route::get('linh-vuc/{id}', 'API\CauHoiController@getQuestionByCategoryId');
    Route::post('tim-kiem', 'API\CauHoiController@getQuestionById');
    Route::get('danh-sach', 'API\CauHoiController@listQuestion');

});
//
Route::prefix('chi-tiet-luot-choi')->group(function () {
    Route::get('danh-sach', 'API\ChiTietLuotChoiController@playDetail');
});
//
Route::prefix('cau-hinh-app')->group(function () {
    Route::get('danh-sach', 'API\CauHinhAppController@listApp');
});
//
Route::prefix('quan-tri-vien')->group(function () {
    Route::get('danh-sach', 'API\QuanTriVienController@listManage');
    // truyền theo query string
    Route::post('tim-kiem', 'API\QuanTriVienController@getManageByIdQueryString');
    // truyền theo path
    Route::post('tim-kiem/{id}', 'API\QuanTriVienController@getManageByIdPath');
});
//
Route::prefix('lich-su-mua-credit')->group(function () {
    Route::get('danh-sach', 'API\LichSuMuaCreditController@listHistoryBuyCredit');
    // truyền theo query string
    Route::post('tim-kiem', 'API\LichSuMuaCreditController@getHistoryBuyCreditByIdQueryString');
    // truyền theo path
    Route::post('tim-kiem/{id}', 'API\LichSuMuaCreditController@getHistoryBuyCreditPathById');
    // cập nhật lịch sử mua credit
    Route::post('cap-nhat-lich-su-mua', 'API\LichSuMuaCreditController@updateHistoryBuyCreditById');
});
//
Route::prefix('goi-credit')->group(function () {
    Route::get('danh-sach', 'API\GoiCreditController@listCredit');
    // truyền theo query string 
    Route::post('tim-kiem', 'API\GoiCreditController@getCreditByIdQueryString');
    // truyền theo path
    Route::post('tim-kiem/{id}', 'API\GoiCreditController@getCreditPathById');
});
