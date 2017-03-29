<?php

use App\Task;

Route::get('/', 'PostsController@index');
Route::get('/posts/{post}', 'PostsController@show');

// controller => PostController
// Eloquent model => Post
// migration => create_posts_table