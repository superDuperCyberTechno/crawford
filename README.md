# crawford
### AKA _Scaleway Object Storage File System Driver for Laravel_
A simple extension that adds the Scaleway Object Storage as a file system extension to Laravel.

Just install via Composer:

```
composer require superdupercybertechno/crawford
```

... add the driver to `app/filesystem.php`...:

```
'scaleway' => [
    'driver' => 'scaleway',
    'key' => env('SCALEWAY_OBJECT_STORAGE_KEY'),
    'secret' => env('SCALEWAY_OBJECT_STORAGE_SECRET'),
    'region' => env('SCALEWAY_OBJECT_STORAGE_REGION'),
    'bucket' => env('SCALEWAY_OBJECT_STORAGE_BUCKET'),
],
```

... and finally add the credentials to `.env`:

```
SCALEWAY_OBJECT_STORAGE_KEY=
SCALEWAY_OBJECT_STORAGE_SECRET=
SCALEWAY_OBJECT_STORAGE_REGION=
SCALEWAY_OBJECT_STORAGE_BUCKET=
```

At this point you should be good to go!
