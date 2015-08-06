<?php
namespace JREAM;
require '../src/array_functions.php';
require 'sample_arrays.php';
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
            <span class="navbar-brand">JREAM\array_key_in()</span>
        </div>
    </div>
</nav>

<div class="container">

<?php

function run($title, $search_for, $haystack)
{
    echo "<div class='row'>";
    echo "<div class='col-md-12'>";
    echo "<h2>$title</h2>";
    $json_str = json_encode($haystack);

    // Visual Output
    echo '<code>';
    echo "<b>Searching: \"$search_for\" in..</b>\n";
    var_dump($json_str);
    $result = (bool) strstr($json_str, $search_for) ? 'True' : 'False';
    echo "<strong>Result: $result</strong>";

    // Process
    $result = array_key_in($search_for, $haystack);
    echo "<h2>Result</h2>";
    var_dump($result);
    echo '</code>';
    echo '</div>';
    echo '</div>';

}

run('Simple',   'not_here',     $simple);
run('Named',    'frontend',     $named);
run('Nested',   'supervisor',   $nested);

?>
</div><!-- /container>
</body>
</html>