<?php

$old_array = [
    [
        'name' => 'Bruce',
        'surname' => 'Wayne',
        'occupation' => 'billionaire'
    ],
    [
        'name' => 'Clark',
        'surname' => 'Kent',
        'occupation' => 'reporter'
    ],
    [
        'name' => 'Peter',
        'surname' => 'Parker',
        'occupation' => 'photographer'
    ]
];

$new_array = [];

foreach ($old_array as $old_key => $old_value) {
 
 
    // do any necessary transformations on the value
    $new_value = [
        'full_name' => $old_value['name'] . ' ' . $old_value['surname'],
        'job' => $old_value['occupation']
    ];
 
    // add the transformed value to the new array
    $new_array[$old_key] = $new_value;
}

var_dump($new_array);

class Person
{
    public $first_name = null;
    public $last_name = null;
    public $job = null;
}

$new_array = [];

foreach ($old_array as $old_key => $old_value) {
 
    // do any necessary transformations on the value
    $new_value = new Person;
    $new_value->first_name  = $old_value['name'];
    $new_value->last_name   = $old_value['surname'];
    $new_value->job         = $old_value['occupation'];
 
    // add the transformed value to the new array
    $new_array[$old_key] = $new_value;
}

var_dump($new_array);

$old_array = [
    [
        'name' => 'Bruce',
        'surname' => 'Wayne',
        'occupation' => 'billionaire'
    ],
    [
        'name' => 'Clark',
        'surname' => 'Kent',
        'occupation' => 'reporter'
    ],
    [
        'name' => 'Peter',
        'surname' => 'Parker',
        'occupation' => 'photographer'
    ]
];

// your code
$new_array = [];

foreach ($old_array as $value) {
    $new_array[] = $value['occupation'];
}

var_dump($new_array);