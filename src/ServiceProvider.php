<?php

namespace Xyu\Banks;

use Hanson\Foundation\Http;
use Pimple\Container;
use Pimple\ServiceProviderInterface;
use Xyu\Banks\Ccb\LifeAccount;

class ServiceProvider implements ServiceProviderInterface
{

    public function register(Container $pimple)
    {
        $pimple['http'] = function (BankApp $app) {
            return new Http($app);
        };

        $pimple['decrypt'] = function (BankApp $app) {
            return new Decrypt($app);
        };

        $pimple['life_account'] = function (BankApp $app) {
            return new LifeAccount($app);
        };

    }
}