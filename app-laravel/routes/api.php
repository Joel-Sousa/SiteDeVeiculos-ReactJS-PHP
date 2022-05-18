<?php

use App\Http\Controllers\api\VehiclesController;
use App\Http\Controllers\webservice\WebserviceController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::apiResources([
    'vehicles' => VehiclesController::class
]);

Route::get('vehicles/{vehicle_type}/brand', [VehiclesController::class, 'brand']);
Route::get('vehicles/{vehicle_type}/{vehicle_brand}/model', [VehiclesController::class, 'model']);
Route::get('vehicles/{vehicle_brand}/{vehicle_model}/version', [VehiclesController::class, 'version']);

Route::group(['prefix' => 'webservice'], function(){
    Route::post('cep', [WebserviceController::class, 'cep']);
});
