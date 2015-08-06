<?php

namespace JREAM;

require '../src/array_functions.php';
require 'sample_arrays.php';


echo '<pre>';

echo '<h2>Simple</h2>';
_recursion($simple);

echo '<h2>Named</h2>';
_recursion($named);

echo '<h2>Nested</h2>';

_recursion($nested);

echo '</pre>';