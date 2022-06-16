<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\V1\PostController as PostV1;
use App\Http\Controllers\Api\V2\PostController as PostV2;

Route::post('login', [App\Http\Controllers\Api\LoginController::class, 'login']);

Route::apiResource('v1/posts', PostV1::Class)
    ->only(['index', 'show', 'destroy'])
    ->middleware('auth:sanctum');

Route::apiResource('v2/posts', PostV2::Class)
    ->only(['index', 'show'])
    ->middleware('auth:sanctum');
