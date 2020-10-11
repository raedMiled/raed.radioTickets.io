<?php

use Illuminate\Support\Facades\Route;

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


Route::get('/deals/{deal}', 'DealsController@show' );

Route::get('/', 'EventsController@indexHome');
Route::get('/eventPage', 'EventsController@indexAll');
Route::get('/welcome' ,'EventsController@indexAlll')->middleware('auth');

Route::get('/{event}/reserveEvent' ,'EventsController@indexReserve');
Route::post('/{event}/reserveEvent' ,'EventsController@storeReserve')->name('reserve.event');

Route::get('/home/{event}/reserveEventClient' ,'EventsController@indexReserveClient')->middleware('auth');
Route::post('/home/{event}/reserveEventClient' ,'EventsController@storeReserveClient')->name('reserveClient.event')->middleware('auth');

Auth::routes(['verify' => true]);
Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');
Route::get('/home/event', 'EventsController@indexPage')->middleware('auth');
//->middleware('verified')
Route::get('/home/events', 'EventsController@index')->middleware('auth');
Route::post('/home/events/create', 'EventsController@store')->name('save.event')->middleware('auth');
Route::get('/home/events/create', 'EventsController@create')->name('create.event')->middleware('auth');
Route::get('/home/events/{event}/edit', 'EventsController@edit')->name('edit.event')->middleware('auth');
Route::get('/events/{event}/show', 'EventsController@show')->name('show.event');
Route::put('/home/events/{event}', 'EventsController@update')->name('update.event')->middleware('auth');
Route::delete('/events/{event}', 'EventsController@delete')->name('delete.event')->middleware('auth');
Route::get('/events/{event}/showClient', 'EventsController@showClient')->name('showClient.event')->middleware('auth');
Route::get('/events/{event}/reserve', 'SmsController@reserve')->name('reserve.sms');
Route::get('/events/resrv', 'SmsController@sendResrv')->name('sendResrv.sms')->middleware('auth');
Route::post('/events', 'SmsController@store')->name('store.sms')->middleware('auth');
Route::post('/events/reserve', 'SmsController@sendReservation')->name('sendReservation.sms')->middleware('auth');
Route::get('/payment', 'PaymentController@payment')->name('payment')->middleware('auth');
Route::post('/subscribe', 'PaymentController@subscribe')->middleware('auth');
//Route::post('/events/create', 'EventsController@imageUpload')->name('image.upload.post');


//Route::get('/events' , function(){

 //   $event = App\Event::latest()->get();
    


//    return view('events', [
//        'events' => $event
//    ]);
// });



/*Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');*/
