<?php
namespace Spladder
{ 
    // TODO(rhawkins): Move error setup to Bootstrap
    error_reporting(E_ALL);
    ini_set('display_errors', '1');

    require_once('phpHammock/PhpHammock.php');

    $strap = \PhpHammock\PhpHammock::Bootstrap();
    
    $hammock = new \PhpHammock\PhpHammock($strap['config']);
    $hammock->respond($strap['request']);
}
