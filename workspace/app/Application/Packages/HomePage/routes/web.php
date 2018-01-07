<?php

Route::get('/', Application\Packages\HomePage\Controllers\HomePageController::class . '@index')
    ->name('profile');