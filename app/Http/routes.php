<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


/*  --------------------------------------------------------------------------
    Courses
    --------------------------------------------------------------------------*/
Route::group(array('prefix' => 'courses'), function(){
    Route::get('/list' , ['as' => 'courses.list' , 'uses' => 'CourseController@getCourses']);
    Route::get('/add' , ['as' => 'courses.add' , 'uses' => 'CourseController@addCourse']);
    Route::get('/details/{id}' , ['as' => 'courses.details' , 'uses' => 'CourseController@getCourseDetails']);
});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => 'web'], function () {
    Route::auth();
    Route::get('/', function () {
        return view('welcome');
    });
    Route::get('/home', 'HomeController@index');

    /*  --------------------------------------------------------------------------
        Books
        --------------------------------------------------------------------------*/
    Route::group(array('prefix' => 'books'), function() {

        Route::get('/list', ['as' => 'books.list', 'uses' => 'BookController@getBooks']);
        Route::get('/add', ['as' => 'books.add', 'uses' => 'BookController@getNewBook']);
        Route::post('/add', ['as' => 'books.add', 'uses' => 'BookController@postNewBook']);
        Route::get('/details/{bookID?}', ['as' => 'books.details', 'uses' => 'BookController@getBookDetails']);

    });

    /*  --------------------------------------------------------------------------
        Books
        --------------------------------------------------------------------------*/
    Route::group(array('prefix' => 'authors'), function() {

        Route::get('/list', ['as' => 'authors.list', 'uses' => 'AuthorController@getAuthors']);
        Route::get('/add', ['as' => 'authors.add', 'uses' => 'AuthorController@getNewAuthor']);
        Route::post('/add', ['as' => 'authors.add', 'uses' => 'AuthorController@postNewAuthor']);
        Route::get('/details/{id}', ['as' => 'authors.details', 'uses' => 'AuthorController@getAuthorDetails']);

    });

});
