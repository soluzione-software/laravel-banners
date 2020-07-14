<?php

namespace SoluzioneSoftware\Banners\Contracts;

interface Banner
{
    /**
     * @return string
     */
    public function getTable();

    /**
     * @return string
     */
    public function getKeyName();

    public function getBannersGroup(): BannersGroup;
}
