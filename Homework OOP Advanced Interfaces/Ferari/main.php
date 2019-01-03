<?php
spl_autoload_register();

$input = readline();

$driver = new Ferrary($input);
$driver->carParams($input);