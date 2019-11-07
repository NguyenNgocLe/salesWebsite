<?php
Route::get("/", function(){
    return view('layout');
})->name("layout");

Route::prefix('quan-tri')->group(function(){
    Route::prefix('linh-vuc')->group(function(){
        Route::name('linh-vuc.')->group(function(){
            Route::get('/', "LinhVucController@index")->name('danh-sach');
            Route::get('them-moi', "LinhVucController@create")->name('them-moi');
            Route::post('them-moi', "LinhVucController@store")->name('xu-ly-them-moi');
            Route::get('cap-nhat/{id}', "LinhVucController@edit")->name('cap-nhat');
            Route::put('cap-nhat/{id}', "LinhVucController@update")->name('xu-ly-cap-nhat');
            Route::get('xoa/{id}',"LinhVucController@destroy")->name('xoa');
            // 
            Route::get('thung-rac', "LinhVucController@onlyTrashed")->name('thung-rac');
            Route::get('khoi-phuc/{id}', "LinhVucController@restore")->name('khoi-phuc');
            Route::delete('xoa-bo/{id}',"LinhVucController@delete")->name('xoa-bo');
        });
    });
    
Route::name('quan-tri')->group(function(){
    Route::prefix('cau-hoi')->group(function(){
        Route::name('cau-hoi.')->group(function (){
            Route::get('/', "CauHoiController@index")->name('danh-sach');
            Route::get('them-moi', "CauHoiController@create")->name('them-moi');
            Route::post('them-moi', "CauHoiController@store")->name('xu-ly-them-moi');
            Route::get('cap-nhat/{id}', "CauHoiController@edit")->name('cap-nhat');
            Route::put('cap-nhat/{id}', "CauHoiController@update")->name('xu-ly-cap-nhat');
            Route::get('xoa/{id}',"CauHoiController@destroy")->name('xoa');
            // 
            Route::get('thung-rac', "CauHoiController@onlyTrashed")->name('thung-rac');
            Route::get('khoi-phuc/{id}', "CauHoiController@restore")->name('khoi-phuc');
            Route::delete('xoa-bo/{id}',"CauHoiController@delete")->name('xoa-bo');
        });
    });
});
    
    
});
?>