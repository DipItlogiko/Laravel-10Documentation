# Laravel-10Documentation

## Views

 All practices are located into the routes/web.php file


 ## View share and View composer ar moddhe parthokko:

 View share and View composer ar moddhe parthokko hocche jodi amra view share kori tahole protita view file oi share kora data ta access korte parbe kintu view composer ar maddhome amra specific kore dite pari je amar kon kon view file a data ta pass korbo and kebol matro oi view file guloi pass kora data ta use korte parbe.....(check routes/web.php)


## Optimizing Views

  Compiling views during the request may have a small negative impact on performance, so Laravel provides the view:cache Artisan command to precompile all of the views utilized by your application. For increased performance, you may wish to run this command as part of your deployment process:

      php artisan view:cache


  You may use the view:clear command to clear the view cache:

      php artisan view:clear    