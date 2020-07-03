<?php



Route::get('/',function(){

    return view('site.index') ;
});

Auth::routes();

//this group for admin 
Route::group(['as' => 'admin.','prefix' => 'admin' , 'namespace' => 'Admin', 'middleware'=> ['auth','admin']], function () {
    
    Route::get('dashboard',['as' => 'dashboard' , 'uses' => 'DashboardController@index']); 
   
   

});











