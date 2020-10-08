<?php

function add_item(&$array, $item) 
{
    $array[] = $item;

    // same as above
    // array_push($array, $item); 
}


function element($element, $innerhtml = '', $attributes = '')
{
    return "<{$element} {$attributes}>{$innerhtml}</{$element}>";
}

echo element('p', ''); // <p></p>
echo element('p', 'some text'); // <p>some text</p>
echo element('p', 'some text', 'class="foo"'); // <p class="foo">some text</p>

function convert_weight($value, $unit = 'kg')
{
    if ($unit == 'kg') {
        return $value * 2.20462262;
    } else {
        return $value / 2.20462262;
    }
}

echo convert_weight(1, 'lb') . '<br>'; // 0.45359237 - converted 1 lb to kilograms
echo convert_weight(1, 'kg') . '<br>'; // 2.20462262 - converted 1 kg to lbs
echo convert_weight(1) . '<br>';       // 2.20462262 - used default unit kg, converted 1 kg to lbs
