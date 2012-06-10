Amazon MWS API Installation
========================

Into a symfony2 project
-----------------------

Add the reference into your deps file : 

    [amazon-search-mws-sdk]
    git=http://github.com/choomz/amazon-search-mws-sdk.git
    target=amazon/mws/lib

Update autoload.php :
    
    $loader->registerPrefixes(array(
        'MwsSearchClient'  => __DIR__.'/../vendor/amazon/mws/lib/search',
    ));

    
    // dirty hack to be able to use the amazon require_once system ...
    set_include_path(get_include_path() . PATH_SEPARATOR  . __DIR__ . '/../vendor/amazon/mws/lib/search/src');

Use in controller :

     $client = new \MwsSearchClient(/* args */);
