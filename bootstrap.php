<?php

include_once 'classes/SplClassLoader.php';

$splClassLoader = new SplClassLoader('Beleserv', 'classes/');
$splClassLoader->register();