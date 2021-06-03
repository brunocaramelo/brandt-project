<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Automattic\WooCommerce\Client as ClientWoocommerce;

class ClientWoocommerceServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {

        $this->app->singleton(ClientWoocommerce::class, function () {

            return new ClientWoocommerce(
                config('ecommerce.url'),
                config('ecommerce.consumer_key'),
                config('ecommerce.consumer_secret'),
                [
                    'version' => 'wc/v3',
                    'wp_api' => true,
                    'query_string_auth' => true,
                    'timeout' => 9000,
                ]
            );
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
