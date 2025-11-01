<?php
use App\Http\Controllers\RaktarController;
//use App\Models\Raktar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get("/", action: [RaktarController::class, 'index']);

Route::get('/category/{category}', [RaktarController::class, 'showCat']);

Route::get('/author/{author}', [RaktarController::class, 'showAuthor']);

Route::get('/publisher/{publisher}', [RaktarController::class, 'showPublisher']);

Route::post("/newBooks", [RaktarController::class, 'store']);
/*
Route::get("/", action: [Raktar::class, 'index']);

Route::get('/category/{category}', [Raktar::class, 'showCat']);

Route::get('/author/{author}', [Raktar::class, 'showAuthor']);

Route::get('/publisher/{publisher}', [Raktar::class, 'showPublisher']);

Route::post("/newBooks", [Raktar::class, 'store']);*/
