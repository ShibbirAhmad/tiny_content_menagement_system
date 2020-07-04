<?php



Route::get('/','HomeController@index')->name('home');
//route for display video details
Route::get('/video-details/{slug}','SiteController@videoDetails')->name('video.details');

//route for displaly post content details
Route::get('/post-details/{slug}','SiteController@postDetails')->name('post.details');

//route for post content 
Route::get('post-content','SiteController@postContent')->name('post.content');

//route for post content 
Route::get('video-content','SiteController@videoContent')->name('video.content');



Auth::routes();

//this group for admin 
Route::group(['as' => 'admin.','prefix' => 'admin' , 'namespace' => 'Admin', 'middleware'=> ['auth','admin']], function () {
    
    Route::get('dashboard',['as' => 'dashboard' , 'uses' => 'DashboardController@index']); 
    Route::resource('post', 'PostController');
    
    Route::get('pending/post','PostPendingController@pending')->name('post.pending');
    Route::patch('pending/post/approve/{id}','PostPendingController@postApprove')->name('post.approve');

});






Route::get('facebook',function(){

    return redirect()->away('http://www.facebook.com')->name('facebook');
});

           
           