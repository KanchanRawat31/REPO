<?php
define('ROOT',dirname(__DIR__).DIRECTORY_SEPERATOR);
define('APP',dirname(__DIR__).DIRECTORY_SEPERATOR);
define('VIEW',ROOT.'app'.DIRECTORY_SEPERATOR.'view'.DIRECTORY_SEPERATOR);
define('MODEL',dirname(__DIR__).DIRECTORY_SEPERATOR.'model'.DIRECTORY_SEPERATOR);
define('DATA',dirname(__DIR__).DIRECTORY_SEPERATOR.'data'.DIRECTORY_SEPERATOR);
define('COMMON',dirname(__DIR__).DIRECTORY_SEPERATOR.'common'.DIRECTORY_SEPERATOR);
define('CONTROLLER',dirname(__DIR__).DIRECTORY_SEPERATOR.'controller'.DIRECTORY_SEPERATOR);
$modules=[ROOT,APP,COMMON,CONTROLLER,DATA,VIEW,MODEL];

set_include_path(get_include_path().PATH_SEPARATOR.implode(glue:PATH_SEPARATOR, modules));
//implode returns the string of an elements of an array
spl_autoload(new_include_path:'spl_autoload',throw:false);

echo 'i am inside config';
?>