<?php

/**
 * Não faça isso. Crie arquivos exclusivos para responsabilidades exclusivas.
 * Casa arquivo .php deve fazer uma coisa diferente, e não várias responsabilidades como nesse exemplo.
 */
// side effect: change ini settings
ini_set('error_reporting', E_ALL);

// side effect: loads a file
include "file.php";

// side effect: generates output
echo "<html>\n";

// declaration
function foo()
{
    // function body
}
