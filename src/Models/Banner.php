<?php

namespace SoluzioneSoftware\Banners\Models;

use Illuminate\Database\Eloquent\Model;
use SoluzioneSoftware\Banners\Contracts\Banner as BannerContract;
use SoluzioneSoftware\Banners\Contracts\BannersGroup as BannersGroupContract;
use SoluzioneSoftware\Banners\Traits\HasContractsBindings;

/**
 * @property BannersGroupContract banners_group
 */
class Banner extends Model implements BannerContract
{
    use HasContractsBindings;

    public function getBannersGroup(): BannersGroupContract
    {
        return $this->banners_group;
    }

    public function banners_group()
    {
        return $this->belongsTo(static::getBannersGroupContractBinding());
    }
}
