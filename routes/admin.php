<?php

/**
 * Routes that need an authenticated user.
 */
Route::group(['middleware' => 'administr.auth'], function() {
});