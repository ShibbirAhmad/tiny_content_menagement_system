<?php



Route::get('/',function(){

    return view('site.index') ;
});

Auth::routes();

//this group for admin 
Route::group(['as' => 'admin.','prefix' => 'admin' , 'namespace' => 'Admin', 'middleware'=> ['auth','admin']], function () {
    
    Route::get('dashboard',['as' => 'dashboard' , 'uses' => 'DashboardController@index']); 
    Route::resource('post', 'PostController');
    
    Route::get('pending/post','PostPendingController@pending')->name('post.pending');
    Route::patch('pending/post/approve','PostPendingController@postApprove')->name('post.approve');

});











