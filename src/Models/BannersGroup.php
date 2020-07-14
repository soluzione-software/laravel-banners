<?php

namespace SoluzioneSoftware\Banners\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use SoluzioneSoftware\Banners\Contracts\BannersGroup as BannersCollectionContract;
use SoluzioneSoftware\Banners\Traits\HasContractsBindings;

/**
 * @property Collection banners
 */
class BannersGroup extends Model implements BannersCollectionContract
{
    use HasContractsBindings;

    public function getBanners(): Collection
    {
        return $this->banners;
    }

    public function banners()
    {
        return $this->hasMany(static::getBannerContractBinding());
    }
}
