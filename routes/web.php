<?php

Route::get('/', function () {
    $userDataService = app('App\Contracts\ExternalDataInterface');
    $responseBody = (string) $userDataService->getData('/users')->getBody();
    return response($responseBody, 200, [
        'Content-Type' => 'application/json'
    ]);
});
