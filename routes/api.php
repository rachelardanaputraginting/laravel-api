<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('first-name', fn () => response()->json([
    "name" => "Rachel"
]));

Route::get('last-name', fn () => response()->json([
    "name" => "Ginting"
]));
