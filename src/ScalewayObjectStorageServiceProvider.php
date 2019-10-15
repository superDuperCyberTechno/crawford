<?php

namespace superDuperCyberTechno\Crawford;

use Storage;
use Aws\S3\S3Client;
use League\Flysystem\AwsS3v3\AwsS3Adapter;
use League\Flysystem\Filesystem;
use Illuminate\Support\ServiceProvider;

class ScalewayObjectStorageServiceProvider extends ServiceProvider{
    public function register(){
        //
    }

    public function boot()
    {
        Storage::extend('scaleway', function ($app, $config) {
            $client = new S3Client([
                'credentials' => [
                    'key'    => $config['key'],
                    'secret' => $config['secret'],
                ],
                'region' => $config['region'],
                'version' => 'latest',
                'endpoint' => 'https://s3.' . $config['region'] . '.scw.cloud',
            ]);

            $adapter = new AwsS3Adapter($client, $config['bucket']);
            $filesystem = new Filesystem($adapter);

            return $filesystem;
        });
    }
}
