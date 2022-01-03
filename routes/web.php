<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

Route::get("/",[HomeController::class, "index"]);

Route::get("/users",[AdminController::class, "user"]);

Route::get("/deletemenu/{id}",[AdminController::class, "deletemenu"]);

Route::get("/updateview/{id}",[AdminController::class, "updateview"]);

Route::post("/update/{id}",[AdminController::class, "update"]);

Route::get("/jerseymenu",[AdminController::class, "jerseymenu"]);

Route::post("/uploadjersey",[AdminController::class, "upload"]);

Route::get("/deleteuser/{id}",[AdminController::class, "deleteuser"]);

Route::get("/redirects",[HomeController::class, "redirects"]);


Route::post("/order",[AdminController::class, "order"]);

Route::get("/vieworder",[AdminController::class, "vieworder"]);


Route::get("/viewcategory",[AdminController::class, "viewcategory"]);

Route::get("/updatecategory/{id}",[AdminController::class, "updatecategory"]);

Route::post("/uploadcategory",[AdminController::class, "uploadcategory"]);

Route::post("/updatejerseycategory/{id}",[AdminController::class, "updatejerseycategory"]);

Route::get("/deletecategory/{id}",[AdminController::class, "deletecategory"]);

Route::post("/addcart/{id}",[HomeController::class, "addcart"]);

Route::get("/showcart/{id}",[HomeController::class, "showcart"]);

Route::get("/remove/{id}",[HomeController::class, "remove"]);

Route::post("/orderconfirm",[HomeController::class, "orderconfirm"]);

Route::get("/viewcarts",[AdminController::class, "viewcarts"]);

Route::get("/search",[AdminController::class, "search"]);

Route::get("/home",[HomeController::class, "home"]);


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
