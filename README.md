# crawford
#### AKA _Scaleway Object Storage File System Driver for Laravel_
A simple extension that adds the [Scaleway Object Storage](https://www.scaleway.com/en/docs/object-storage-feature/) as a file system extension to Laravel.

Just install via Composer:

```
composer require superdupercybertechno/crawford
```

... add the driver to `app/filesystems.php`...:

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
SCALEWAY_OBJECT_STORAGE_KEY=[your key]
SCALEWAY_OBJECT_STORAGE_SECRET=[your secret]
SCALEWAY_OBJECT_STORAGE_REGION=[your region]
SCALEWAY_OBJECT_STORAGE_BUCKET=[your bucket name]
```

At this point you should be good to go!
