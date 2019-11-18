<?php

use CoruscateSolutions\SerialNumberGeneratorLaravel\Models\SerialNoGenerator;

Route::get('cs-setting', function () {
    return SerialNoGenerator::all();

});
