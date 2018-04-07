<?php

require_once ('parser.php');
$parser = FullNameParser();

$name = 'Steve Kessler';

$split_value = $parser->parser_name($name);
print_r($split_value);
?>