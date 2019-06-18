<?php

Route::group(["middleware" => ["web"]], function() {
	Route::get('setLang/{lang}', 'vietanh\lform\controllers\LFormController@getSetLang');
});

Route::group(["middleware" => ["web", "auth"], 'prefix' => 'lbform', 'namespace' => 'vietanh\lform\controllers'], function(){
	Route::get('logout', "LFormController@logout");
});