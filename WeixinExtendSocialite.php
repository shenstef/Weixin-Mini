<?php

namespace SocialiteProviders\WeixinMini;

use SocialiteProviders\Manager\SocialiteWasCalled;

class WeixinMiniExtendSocialite
{
    /**
     * Register the provider.
     *
     * @param \SocialiteProviders\Manager\SocialiteWasCalled $socialiteWasCalled
     */
    public function handle(SocialiteWasCalled $socialiteWasCalled)
    {
        $socialiteWasCalled->extendSocialite(
            'weixinmini', __NAMESPACE__.'\Provider'
        );
    }
}
