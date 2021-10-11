<?php
// Activating class
require_once(__DIR__ ."/secure.php");

// Original text
$string = "I have very secret information that must not be seen by outsiders. Can you take care of the file?";

// Original text encrypted
$encrypted = $hide->encrypt($string);
print_r($encrypted);

// Original text in readable form
$decrypted = $hide->decrypt($encrypted);
print_r($decrypted);

die();
