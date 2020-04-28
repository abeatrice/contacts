<?php

use App\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('api')->post('/track/{contact}', function(Request $request, Contact $contact) {
    $tracker = new \Klaviyo(config('services.klaviyo.public'));
    $result = $tracker->track('click', ['$id' => $contact->id]);
    return $result;
});

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
