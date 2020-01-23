<?php
spl_autoload_register('myAutoload');
function myAutoload($class_name)
{
    $dirs = array(
        'components/', // Project specific classes (+Core Overrides)
        'models/', // Core classes example
    );

    foreach( $dirs as $dir ) {
        if (file_exists($dir.$class_name.'.php')) {
            require_once($dir.$class_name.'.php');
            return;
        }
    }
}