<?php

namespace cyberindav\xplore\StringyPr;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class StrEn extends ServiceProvider
{
    public function boot()
    {
        Blade::directive('rlStingy', function ($expression) {
            return dbString($expression);
        });
    }
}
