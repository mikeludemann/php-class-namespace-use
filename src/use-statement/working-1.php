<?php

require './../greeting.php';

use Utils\Tools\Greet\greeting as welcome;

$greet = new welcome();

$greet->sayHi();