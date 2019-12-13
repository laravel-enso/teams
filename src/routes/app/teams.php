<?php

Route::get('', 'Index')->name('index');
Route::post('', 'Store')->name('store');
Route::delete('{team}', 'Destroy')->name('destroy');
Route::get('options', 'Options')->name('options');
