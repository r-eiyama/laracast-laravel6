<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
//    return "Hello World";
//    return ['foo' => 'bar'];
    return view('welcome');
});

Route::get('/about', function () {
//    $article = App\Article::all();
//    $article = App\Article::take(2)->get();
    $articles = App\Article::take(3)->latest()->get();
//    return $article;
    return view('about', [
        'articles' => $articles
    ]);
});


Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/articles', 'ArticlesController@index')->name('articles.index');
Route::post('/articles', 'ArticlesController@store');
Route::get('/articles/create', 'ArticlesController@create');
Route::get('/articles/{article}', 'ArticlesController@show')->name('articles.show');
Route::get('/articles/{article}/edit', 'ArticlesController@edit');
Route::put('/articles/{article}', 'ArticlesController@update');


Route::get('test', function () {
//    $name = request('name');
//    return $name;

    return view('test', [
        'name' => request('name')
    ]);
});

//Route::get('/posts/{post}', function ($post) {
////    return view('post');
//    $posts = [
//        'my-first-post' => 'Hello, this is my first blog post!',
//        'my-second-post' => 'Now I am getting the hang of blogging thing.'
//    ];
//
//    if (! array_key_exists($post, $posts)) {
//        abort(404, 'Sorry, that post was not found.');
//    }
//
//    return view('post', [
//        'post' => $posts[$post]
//    ]);
//});

Route::get('/posts/{post}', 'PostsController@show');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
