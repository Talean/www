<?php
/**
 * Created by PhpStorm.
 * User: zalevsky
 * Date: 14.07.14
 * Time: 13:49
 */
defined('CONTROL') or die('RESTRICTED');

include_once('core/config.php');
spl_autoload_register('autoload');
function autoload($name)
{
    $file = 'core/classes/' . $name . '.php';
    if (file_exists($file)) {
        include_once($file);
    }
}
$core = new core;
$core = new mysql;
echo 'start ok <br/>';