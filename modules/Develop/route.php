<?php

use Illuminate\Support\Facades\Route;
use Modules\Develop\Http\Controllers\ModuleController;
use Modules\Develop\Http\Controllers\GenerateController;
use Modules\Develop\Http\Controllers\SchemaController;

Route::apiResource('module', ModuleController::class);

Route::put('module/enable/{name}', [ModuleController::class, 'enable']);

Route::post('generate', [GenerateController::class, 'index']);

Route::apiResource('schema', SchemaController::class)->only(['index', 'show', 'store', 'destroy']);
