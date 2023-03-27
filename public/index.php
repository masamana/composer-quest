<?php

use App\Hello;

require_once('../vendor/autoload.php');

$hello = new Hello();

echo $hello->talk();
