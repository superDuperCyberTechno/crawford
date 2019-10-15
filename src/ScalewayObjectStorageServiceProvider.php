<?php

namespace superDuperCyberTechno\Crawford;

use Storage;
use Aws\S3\S3Client;
use League\Flysystem\Filesystem;
use Illuminate\Support\ServiceProvider;
use League\Flysystem\AwsS3v3\AwsS3Adapter;

class ScalewayObjectStorageServiceProvider extends ServiceProvider{
    public function register(){
        //
    }

    public function boot()
    {
        //extend the storage class and add the driver
        Storage::extend('scaleway', function ($app, $config) {
            $client = new S3Client([
                //pass the client config directly into the constructor
                'credentials' => [
                    'key'    => $config['key'],
                    'secret' => $config['secret'],
                ],
                'region' => $config['region'],
                'version' => 'latest',
                'endpoint' => 'https://s3.' . $config['region'] . '.scw.cloud',
            ]);

            //create adapter and return the filesystem var
            $adapter = new AwsS3Adapter($client, $config['bucket']);
            $filesystem = new Filesystem($adapter);

            return $filesystem;
        });
    }
}
