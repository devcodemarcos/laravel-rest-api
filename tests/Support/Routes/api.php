<?php

use Illuminate\Support\Facades\Route;
use Lomkit\Rest\Tests\Support\Http\Controllers\ModelController;

Route::group(['as' => 'api.', 'prefix' => 'api'], function () {
    \Lomkit\Rest\Facades\Rest::resource('models', ModelController::class);

    \Lomkit\Rest\Facades\Rest::resource('no-exposed-fields', \Lomkit\Rest\Tests\Support\Http\Controllers\NoExposedFieldsController::class);
    \Lomkit\Rest\Facades\Rest::resource('automatic-gating', \Lomkit\Rest\Tests\Support\Http\Controllers\AutomaticGatingController::class);
    \Lomkit\Rest\Facades\Rest::resource('required-creation', \Lomkit\Rest\Tests\Support\Http\Controllers\RequiredCreationController::class);
    \Lomkit\Rest\Facades\Rest::resource('no-authorization', \Lomkit\Rest\Tests\Support\Http\Controllers\NoAuthorizationController::class);
    \Lomkit\Rest\Facades\Rest::resource('soft-deleted-models', \Lomkit\Rest\Tests\Support\Http\Controllers\SoftDeletedModelController::class)->withSoftDeletes();
});
