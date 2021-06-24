<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\getDatafromDB;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('postdata','API\PostController');
Route::get('/useDB','getDatafromDB@getfromDB');
Route::get(
    '/hello/{name}',
    function(Request $request, $name){
        return response()->json("Hello $name", 200);
    }
);
Route::get('/InforCell/id/{id}/isVoltage/{isVoltage}/isTemperature/{isTemperature}/from/{from}/to/{to}',
                'getDatafromDB@getCellInformation');
// Route::get('/InforCell/id/{id}',
//                 'getDatafromDB@getCellInformation');
Route::get('/InforPackage/id/{id}/isVoltage/{isVoltage}/isTemperature/{isTemperature}/isCurrent/{isCurrent}/from/{from}/to/{to}',
                'getDatafromDB@getInformationPackage');

Route::get('/getTableCellInfo','getDatafromDB@getCellTableDB');
Route::get('/getTablePackageInfo','getDatafromDB@getPackageTableDB');
Route::get('/getTablePeripheral','getDatafromDB@getPeripheralTableDB');