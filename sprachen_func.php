<?php
session_start();
header('Cache-control: private'); // IE 6 FIX

if(isSet($_GET['sprache']))
{
    $sprache = $_GET['sprache'];

// register the session and set the cookie
    $_SESSION['sprache'] = $sprache;

    setcookie('sprache', $sprache, time() + (3600 * 24 * 30));
}
else if(isSet($_SESSION['sprache']))
{
    $sprache = $_SESSION['sprache'];
}
else if(isSet($_COOKIE['sprache']))
{
    $sprache = $_COOKIE['sprache'];
}
else
{
    $sprache = 'de';
}

switch ($sprache) {
    case 'de':
        $sprache_file = 'sprache.de.php';
        break;

    case 'en':
        $sprache_file = 'sprache.en.php';
        break;

    case 'fr':
        $sprache_file = 'sprache.fr.php';
        break;

    case 'it':
        $sprache_file = 'sprache.it.php';
        break;

    default:
        $sprache_file = 'sprache.de.php';

}


?>
