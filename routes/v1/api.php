<?php

Route::get('/version', function () {
    return ['Laravel' => app()->version()];
});

require __DIR__.'/../auth.php';