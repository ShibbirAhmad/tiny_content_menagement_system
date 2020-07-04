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
    //route for post pending display and approve
    Route::get('pending/post','PostPendingController@pending')->name('post.pending');
    Route::get('pending/post-show/{id}','PostPendingController@pendingShow')->name('post.pending.show');
    Route::patch('pending/post/approve/{id}','PostPendingController@postApprove')->name('post.approve');

});





//those route are for external link
Route::get('/facebook',function(){
        return redirect()->away('http://www.facebook.com');
})->name('facebook');

//route for linkedin
Route::get('/linkedin',function(){
        return redirect()->away('http://www.linkedin.com');
})->name('linkedin');

//route for twitter
Route::get('/twitter',function(){
        return redirect()->away('http://www.twitter.com');
})->name('twitter');

// route for pinterest 
Route::get('/pinterest',function(){
       return redirect()->away('http://www.pinterest.com');
})->name('pinterest');

//route for vimeo 
Route::get('/vimeo',function(){
       return redirect()->away('http://www.vimeo.com');
})->name('vimeo');
           
           