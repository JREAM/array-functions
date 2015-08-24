<?php
namespace JREAM;

function definition($functionName) {
    $details = new \ReflectionFunction("JREAM\\$functionName");

    $output = '<div>';
    $output .= "<strong>{$details->getShortName()}</strong>( ";
    foreach ($details->getParameters() as $reflectObj) {
        foreach ($reflectObj as $arg) {
            $output .= "\$$arg, ";
        }
    }
    $output = rtrim($output, ' ,');
    $output .= " )";
    $output .= '</div>';
    return $output;
}

function run($title, $search_for, $haystack)
{
    echo "
    <div class='row'>
        <div class='col-md-6'>
        <h3>$title</h3>";

        // Visual Output
        echo '<pre>';
            $json_str = json_encode($haystack);
            print_r($json_str);
            $result = (bool) strstr($json_str, $search_for) ? 'True' : 'False';
        echo "
        </pre>";
        echo "<b>Searching: \"$search_for\"</b><br>\n
        <strong>Result: $result</strong>
        </div>

        <div class='col-md-6'>";
        // Process
        $result = array_key_depth($search_for, $haystack);
        echo "<h3>Result</h3>";
        var_dump($result);
        echo '</pre>
        </div>
    </div>';
}