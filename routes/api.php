<?php

use Illuminate\Http\Request;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// If you just want to create the necessary actions for an api. do it this way. confirm by going in terminal and do php artisan route:list. if you want all actions then o it this way: Route::Resource('/products', 'ProductController');

Route::apiResource('/products', 'ProductController');


// Since a review route will be product/1/review/1. we use group.
Route::group(['prefix' => 'products'], function(){
	Route::apiResource('/{product}/reviews', 'ReviewController');
});
