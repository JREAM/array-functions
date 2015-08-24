<?php
namespace JREAM;
require '../src/array_functions.php';
require 'sample_arrays.php';
require 'example_functions.php';
?>

<!doctype html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link href='http://fonts.googleapis.com/css?family=Source+Code+Pro' rel='stylesheet' type='text/css'>
    </head>
<body>

<nav class="navbar navbar-inverse">
    <div class="container">
        <div class="navbar-header">
            <span class="navbar-brand">JREAM\array_key_depth()</span>
        </div>
    </div>
</nav>

<div class="container">

<?php
echo definition('array_key_depth');



run('Simple',   'not_here',     $simple);
run('Named',    'frontend',     $named);
run('Nested',   'supervisor',   $nested);

?>
</div><!-- /container -->
</body>
</html>