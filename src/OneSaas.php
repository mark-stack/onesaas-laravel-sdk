<?php

namespace Markevans\OnesaasLaravelSdk;

use Illuminate\Support\Facades\Facade;

class OneSaas extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'onesaas';
    }
}