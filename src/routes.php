<?php

Route::group(["middleware" => ["web"]], function() {
	Route::get('setLang/{lang}', 'vietanh\lform\controllers\LFormController@getSetLang');
});