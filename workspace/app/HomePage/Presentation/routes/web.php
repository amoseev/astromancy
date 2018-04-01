<?php

Route::get('/', \HomePage\Presentation\Controllers\HomePageController::class . '@index')
    ->name('home');