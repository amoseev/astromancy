<?php

Route::get('/currency', \Currency\Presentation\Controllers\CurrencyController::class . '@index');