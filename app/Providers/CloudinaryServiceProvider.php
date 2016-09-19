<?php

namespace FriendZone\Providers;

use Illuminate\Support\ServiceProvider;

class CloudinaryServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $config = config('filesystems.disks.cloudinary');
        \Cloudinary::config([
            "cloud_name" => $config['cloud_name'],
            "api_key" => $config['key'],
            "api_secret" => $config['secret']
        ]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
