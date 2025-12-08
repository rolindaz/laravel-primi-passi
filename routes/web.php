<?php

use Illuminate\Support\Facades\Route;

Route::get('/test ', function () {
    $test_info = "Ciao sono la tua Homepage!";
    return view('test', compact("test_info"));
})->name("home");


Route::get('/profilo', function () {
    $profile_info = "Ciao Rolinda Zampieri questo è il tuo profilo";
    return view('profilo', compact("profile_info"));
})->name("profile");

Route::get('/carrello', function () {
    $cart_info = "Ciao Rolinda Zampieri questo è il tuo carrello";
    return view('carrello', compact("cart_info"));
})->name("cart");