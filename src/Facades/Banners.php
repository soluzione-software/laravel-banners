<?php

namespace SoluzioneSoftware\Banners\Facades;

use Illuminate\Support\Facades\Facade;
use SoluzioneSoftware\Banners\Contracts\Manager;

/**
 * @see \SoluzioneSoftware\Banners\Manager
 */
class Banners extends Facade
{
    protected static function getFacadeAccessor()
    {
        return Manager::class;
    }
}
