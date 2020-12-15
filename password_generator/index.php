<?php

require_once 'generator.php';

$pass_generator = new PasswordGenerator(8);

echo $pass_generator->generate();

?>