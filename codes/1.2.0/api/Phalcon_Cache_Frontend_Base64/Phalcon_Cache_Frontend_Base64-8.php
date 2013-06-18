<?php

 // Cache the files for 2 days using a Base64 frontend
 $frontCache = new Phalcon\Cache\Frontend\Base64(array(
    "lifetime" => 172800
 ));

 //Create a MongoDB cache
 $cache = new Phalcon\Cache\Backend\Mongo($frontCache, array(
    'server' => "mongodb://localhost",
      'db' => 'caches',
    'collection' => 'images'
 ));

 // Try to get cached image
 $cacheKey = 'some-image.jpg.cache';
 $image    = $cache->get($cacheKey);
 if ($image === null) {

     // Store the image in the cache
     $cache->save($cacheKey, file_get_contents('tmp-dir/some-image.jpg'));
 }

 header('Content-Type: image/jpeg');
 echo $image;



