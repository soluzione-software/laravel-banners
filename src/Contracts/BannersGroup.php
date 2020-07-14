<?php

namespace SoluzioneSoftware\Banners\Contracts;

use Illuminate\Database\Eloquent\Collection;

interface BannersGroup
{
    /**
     * @return string
     */
    public function getTable();

    /**
     * @return string
     */
    public function getKeyName();

    public function getBanners(): Collection;
}
