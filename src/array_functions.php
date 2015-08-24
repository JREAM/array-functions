<?php
namespace JREAM;

/**
 * ------------------------------------------------------------------
 * Summary
 * ------------------------------------------------------------------
 *
 * This is a set of standard and recursive array functions to make
 * development easier.
 *
 * ------------------------------------------------------------------
 */

/**
 * Search for a key-name from array or multi-dimensional array.
 * The first result found will be returned
 *
 * @param  string  $needle
 * @param  array   $haystack
 * @param  boolean $strict   [description]
 *
 * @return boolean
 */
function array_key_in($needle, array $haystack, $strict = false) {
    // if ( ! is_array($needle)) {
    //     $needle = [$needle];
    // }

    foreach ($haystack as $key => $value)
    {
        if (is_string($key) && $key == $needle) {
            return $value;
        }
        else if (is_array($value))
        {
            $result = array_key_in($needle, $value);
            if ($result) {
                return $result;
            }
        }
    }

    return false;
}


/**
 * Determines How many levels deep in a key nested from array or multi-dimensional array.
 * Remember, this starts at a 0 key for the first level.
 *
 * @param  string  $needle
 * @param  array   $haystack
 * @param  boolean $strict   [description]
 *
 * @return integer|boolean
 */
function array_key_depth($needle, array $haystack, $strict = false) {
    if (is_numeric($needle)) {
        trigger_error(__FUNCTION__ . ': $needle must be a string', E_USER_ERROR);
    }
    // @TODO at some point would be nice to return an array for multiple needles

}

/**
 * Returns the parent key, numeric or named if it is nested.
 *
 * @param  string $needle
 *
 * @return interger|string|boolean
 */
function array_parent_key($needle) {
    // @TODO
    // Do both flat array and multi-dimensional
}

// ------------------------------------------------------------------
// Public Value Methods
// ------------------------------------------------------------------

/**
 * [array_value_in description]
 *
 * @param  [type]  $needle
 * @param  array   $haystack
 * @param  boolean $strict   [description]
 *
 * @return boolean
 */
function array_value_in($needle, array $haystack, $strict = false) {
    if (is_numeric($needle)) {
        trigger_error(__FUNCTION__ . ': $needle must be a string', E_USER_ERROR);
    }

    if ( ! is_array($needle)) {
        $needle = [$needle];
    }

    // @TODO
    // Do both flat array and multi-dimensional
}

/**
 * Determines How many levels deep in a value nested from array or multi-dimensional array.
 * Remember, this starts at a 0 key for the first level.
 *
 * @param  string  $needle
 * @param  array   $haystack
 * @param  boolean $strict   [description]
 *
 * @return integer|boolean
 */
function array_value_depth($needle, array $haystack, $strict = false) {
    if (is_numeric($needle)) {
        trigger_error(__FUNCTION__ . ': $needle must be a string', E_USER_ERROR);
    }

}

// ------------------------------------------------------------------
// Public Misc Methods
// ------------------------------------------------------------------

/**
 * Get a random value from array or multi-dimensional array
 *
 * @param  array  $haystack [description]
 * @param  [type] $amount   [description]
 *
 * @return array|boolean
 */
function array_random(array $haystack, $amount = 1) {

}

// ------------------------------------------------------------------
// Internal Functions
// ------------------------------------------------------------------

/**
 * This should not be called outside of this file. It's only used internally
 *
 * @param  array    $haystack
 * @param  function $callback
 *
 * @return [type]           [description]
 */
function _recursion(array $haystack) {

    foreach ($haystack as $key => $value)
    {
        if (is_array($value))
        {
            foreach ($value as $leaf_key => $leaf_value) {
                if (is_array($leaf_value)) {
                    _recursion($leaf_value);
                } else {
                    call_user_func_array('\\'. __NAMESPACE__ .'\_debug_callback', [$leaf_key, $leaf_value]);
                }

            }
            continue;
        }

        call_user_func_array('\\'. __NAMESPACE__ .'\_debug_callback', [$key, $value]);
    }
}


/**
 * Used for debugging internally
 *
 * @param  integer|string $key
 * @param  mixed   $value
 * @param  integer $depth
 *
 * @return void
 */
function _debug_callback($key, $value) {
    echo "$key => $value\n";
}

/**
 * Get the depth of an array
 *
 * @param  array  $haystack
 *
 * @return integer
 */
function _depth(array $haystack) {
    $start_depth = 1;

    foreach ($haystack as $value)
    {
        if (is_array($value))
        {
            $depth = _depth($value) + 1;

            if ($depth > $start_depth) {
                $start_depth = $depth;
            }
        }
    }

    return $start_depth;
}

// ------------------------------------------------------------------
// End of File