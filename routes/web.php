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

Route::get('/',[
    'uses'=>'WelcomeController@toWelcome',
    'as'=>'/'

]);
Route::get('aboutBarcamp',[
    'uses'=>'WelcomeController@toAboutBarcamp',
    'as'=>'aboutBarcamp'

]);
Route::get('sponsor',[
    'uses'=>'WelcomeController@toSponsor',
    'as'=>'sponsor'

]);
Route::get('/welcomeSponsor/{logoName}',[
    'uses'=>'WelcomeController@getLogo',
    'as'=>'welcomeSponsor'
]);

Route::get('welcomeGallery/{photoName}',[
    'uses'=>'WelcomeController@getGallery',
    'as'=>'welcomeGallery'
]);

Route::get('welcomeTopic/{photoName}',[
    'uses'=>'WelcomeController@getTopic',
    'as'=>'welcomeTopic'
]);
Route::get('gallery',[
    'uses'=>'WelcomeController@toGallery',
    'as'=>'gallery'

]);


Route::get('schedule',[
    'uses'=>'WelcomeController@toSchedule',
    'as'=>'schedule'

]);
Route::get('topicBoard',[
    'uses'=>'WelcomeController@toTopicBoard',
    'as'=>'topicBoard'

]);
Route::get('contactUs',[
    'uses'=>'WelcomeController@toContactUs',
    'as'=>'contactUs'

]);

Route::post('sendEmail',[
    'uses'=>'WelcomeController@sendEmail',
    'as'=>'sendEmail'
]);



Auth::routes();

Route::get('home',[
    'uses'=>'HomeController@index',
    'as'=>'home'

]);
Route::get('manageSponsor',[
    'uses'=>'HomeController@manageSponsor',
    'as'=>'manageSponsor'

]);

Route::post('newSponsor',[
    'uses'=>'SponsorController@newSponsor',
    'as'=>'newSponsor'
]);
Route::get('/sponsorLogo/{logoName}',[
    'uses'=>'HomeController@getLogo',
    'as'=>'sponsorLogo'
]);
Route::get('/removeSponsor,{id}',[
    'uses'=>'SponsorController@removeSponsor',
    'as'=>'removeSponsor'
]);
Route::get('manageGallery',[
    'uses'=>'HomeController@manageGallery',
    'as'=>'manageGallery'
]);
Route::post('newGallery',[
    'uses'=>'GalleryController@newGallery',
    'as'=>'newGallery'
]);
Route::get('photoGallery/{photoName}',[
    'uses'=>'HomeController@getGallery',
    'as'=>'photoGallery'
]);
Route::get('/removeGallery,{id}',[
    'uses'=>'GalleryController@removeGallery',
    'as'=>'removeGallery'
]);
Route::get('manageTopicBoard',[
    'uses'=>'HomeController@manageTopicBoard',
    'as'=>'manageTopicBoard'
]);
Route::post('newTopic',[
   'uses'=>'TopicController@newTopic',
    'as'=>'newTopic'
]);
Route::get('/removeTopic,{id}',[
    'uses'=>'TopicController@removeTopic',
    'as'=>'removeTopic'
]);
Route::get('photoTopic/{photoName}',[
    'uses'=>'HomeController@getTopic',
    'as'=>'photoTopic'
]);