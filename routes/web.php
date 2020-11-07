<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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

Auth::routes(['verify' => true]);

Route::get('/', 'EventsController@indexHome');
Route::get('/eventPage', 'EventsController@indexAll');
Route::get('/dealPage', 'DealsController@indexAll');

Route::get('/welcome' ,'EventsController@indexAlll');


Route::get('/{event}/reserveEvent' ,'EventsController@indexReserve')->middleware('verified');
Route::post('/{event}/reserveEvent' ,'EventsController@storeReserve')->name('reserve.event')->middleware('verified');

Route::get('/home/admin', 'AdminController@index')->middleware('verified')->middleware('check-subscription');
Route::get('/home/admin/events', 'AdminController@EventsIndex')->middleware('verified')->middleware('check-subscription');
Route::get('/home/admin/deals', 'AdminController@DealsIndex')->middleware('verified')->middleware('check-subscription');
Route::get('/home/admin/{event}/showEvent', 'AdminController@EventShow')->name('showEvent.admin')->middleware('verified')->middleware('check-subscription');
Route::get('/home/admin/{deal}/showDeal', 'AdminController@DealShow')->name('showDeal.admin')->middleware('verified')->middleware('check-subscription');
Route::get('/home/admin/users', 'AdminController@indexUser')->name('users.admin')->middleware('verified')->middleware('check-subscription');
Route::post('/events/{event}/events', 'AdminController@approveEvent')->name('approve.event')->middleware('verified')->middleware('check-subscription');
Route::post('/deals/{deal}/deals', 'AdminController@approveDeal')->name('approve.deal')->middleware('verified')->middleware('check-subscription');






Route::get('/home/{event}/reserveEventClient' ,'EventsController@indexReserveClient')->middleware('verified');
Route::post('/home/{event}/reserveEventClient' ,'EventsController@storeReserveClient')->name('reserveClient.event')->middleware('verified');


Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');
Route::get('/home/event', 'EventsController@indexPage')->middleware('verified');
//->middleware('verified')
Route::get('/home/events', 'EventsController@index')->middleware('verified')->middleware('check-subscription');
Route::post('/home/events/create', 'EventsController@store')->name('save.event')->middleware('verified')->middleware('check-subscription');
Route::get('/home/events/create', 'EventsController@create')->name('create.event')->middleware('verified')->middleware('check-subscription');
Route::get('/home/events/{event}/edit', 'EventsController@edit')->name('edit.event')->middleware('verified')->middleware('check-subscription');
Route::get('/events/{event}/show', 'EventsController@show')->name('show.event');
Route::put('/home/events/{event}', 'EventsController@update')->name('update.event')->middleware('verified')->middleware('check-subscription');
Route::delete('/events/{event}', 'EventsController@delete')->name('delete.event')->middleware('verified')->middleware('check-subscription');
Route::get('/{event}/showReservations' ,'EventsController@list')->name('list.event')->middleware('verified')->middleware('check-subscription');
Route::get('/events/{event}/showClient', 'EventsController@showClient')->name('showClient.event')->middleware('verified');
Route::get('/events/{event}/reserve', 'SmsController@reserve')->name('reserve.sms');
Route::get('/events/resrv', 'SmsController@sendResrv')->name('sendResrv.sms')->middleware('auth');
Route::post('/events', 'SmsController@store')->name('store.sms')->middleware('auth');
Route::post('/events/reserve', 'SmsController@sendReservation')->name('sendReservation.sms')->middleware('auth');
Route::get('/payment', 'PaymentController@payment')->name('payment')->middleware('verified');
Route::post('/subscribe', 'PaymentController@subscribe')->middleware('verified');


Route::post('/home/deals/create', 'DealsController@store')->name('save.deal')->middleware('verified')->middleware('check-subscription');
Route::get('/home/deals/create', 'DealsController@create')->name('create.deal')->middleware('verified')->middleware('check-subscription');
Route::get('/deals/{deal}/showClient', 'DealsController@showClient')->name('showClient.deal')->middleware('verified');
Route::get('/deals/{deal}/show', 'DealsController@show')->name('show.deal');
Route::get('/home/deals/{deal}/edit', 'DealsController@edit')->name('edit.deal')->middleware('verified')->middleware('check-subscription');
Route::put('/home/deals/{deal}', 'DealsController@update')->name('update.deal')->middleware('verified')->middleware('check-subscription');
Route::delete('/deals/{deal}', 'DealsController@delete')->name('delete.deal')->middleware('verified')->middleware('check-subscription');
Route::get('/{deal}/showDealReservations' ,'DealsController@list')->name('list.deal')->middleware('verified')->middleware('check-subscription');
Route::get('/home/deal', 'DealsController@indexPage')->middleware('verified');
Route::get('/home/deals', 'DealsController@index')->middleware('verified')->middleware('check-subscription');


Route::get('/home/{deal}/reserveDealClient' ,'DealsController@indexReserveClient')->middleware('verified');
Route::post('/home/{deal}/reserveDealClient' ,'DealsController@storeReserveClient')->name('reserveClient.deal')->middleware('verified');







Route::get('/home/search', 'SearchController@show')->middleware('verified');
Route::post('/home/search', 'SearchController@search')->name('search.event')->middleware('verified');

Route::get('/searchGuest', 'SearchController@show');
Route::post('/searchGuest', 'SearchController@searchGuest')->name('searchGuest');


//Route::post('/events/create', 'EventsController@imageUpload')->name('image.upload.post');


//Route::get('/events' , function(){

 //   $event = App\Event::latest()->get();
    


//    return view('events', [
//        'events' => $event
//    ]);
// });



/*Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');*/
