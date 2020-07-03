<?php


Auth::routes();

Route::get('/',function(){

    return view('site.index') ;
});



Route::get('/admin/layout',function(){

    return view('admin.dashboard') ;
});

















