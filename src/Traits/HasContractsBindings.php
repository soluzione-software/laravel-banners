<?php

namespace SoluzioneSoftware\Banners\Traits;

use Illuminate\Container\Container;
use SoluzioneSoftware\Banners\Contracts\Banner;
use SoluzioneSoftware\Banners\Contracts\BannersGroup;

trait HasContractsBindings
{
    public static function resolveBannersGroupContract(): BannersGroup
    {
        /** @var BannersGroup $bannersGroup */
        $bannersGroup = Container::getInstance()->make(BannersGroup::class);
        return $bannersGroup;
    }

    public static function resolveBannerContract(): Banner
    {
        /** @var Banner $banner */
        $banner = Container::getInstance()->make(Banner::class);
        return $banner;
    }

    public static function getBannersGroupContractBinding(): string
    {
        return get_class(Container::getInstance()->get(BannersGroup::class));
    }

    public static function getBannerContractBinding(): string
    {
        return get_class(Container::getInstance()->get(Banner::class));
    }
}
