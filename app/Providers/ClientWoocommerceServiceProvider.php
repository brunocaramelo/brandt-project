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
                        env('CMS_ORIGIN_API'),
                        env('WC_CONSUMER_KEY'),
                        env('WC_CONSUMER_SECRET'),
                        [
                            'version' => '/wc/v3',
                            'wp_api_prefix' => '/?rest_route=',
                            'query_string_auth' => true,
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
