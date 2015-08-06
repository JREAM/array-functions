<?php

/**
 * This is a simple set of array to use for testing the functions on.
 */

// ------------------------------------------------------------------

/**
 * Basic Array with Numeric Keys
 * @var array
 */
$simple = [
    'alabama',
    'alaska',
    'california',
    'florida',
    'michigan',
    'oklahoma',
    'nevada',
];

// ------------------------------------------------------------------

/**
 * Multi-Dimensional Array with Numeric Sub-Keys
 * @var array
 */
$named = [
    'frontend' => [
        'css',
        'sass',
        'less',
        'html5',
        'javascript'
    ],
    'backend' => [
        'java',
        'php',
        'python',
        'ruby'
    ]
];

// ------------------------------------------------------------------

/**
 * Deeper Multi-Dimensional Array with Named Sub-Keys, Numeric Category Keys,
 * and Named nested keys.
 * @var array
 */
$nested = [
    'supervisor' => [
        [
            'role' => 'ceo',
            'name' => 'mark smith',
            'age' => 59,
        ],
        [
            'role' => 'coo',
            'name' => 'daniel boon',
            'age' => 41,
        ],
        [
            'role' => 'cto',
            'name' => 'markus pierce',
            'age' => 35,
        ]
    ],
    'employee' => [
        [
            'role' => 'human resources',
            'name' => 'todd white',
            'age' => 60
        ],
        [
            'role' => 'engineer',
            'name' => 'harry truman',
            'age' => 30
        ],
        [
            'role' => 'intern',
            'name' => 'ben button',
            'age' => 28
        ],

    ],
    'candidates' => [
        [
            'role' => 'engineer',
            'name' => 'amy harper',
            'age' => 29
        ]
    ]
];