let i = 9; // first
let j = 10; // second

console.log('Hello'); // third

function my_function() {
    let i = 8; // fifth

    // function ends
}

my_function(); // fourth

let k = 11; // sixth

if ('hello'+' world') { // expression converted to boolean (true|false)
    // this will be executed if 1 is true   
}

false - values that are considered empty
    0
    ''
    null
    undefined

true
    1, 2, 3, 4, 5, 2213142141
    ' ', 'aaa'
    [] - type of object
    [''], [0], []

{

    for (let i = 0; i < 10; i++) {

        let k = 10;
        var j = 1; 

    }

    k + 10; // error
    var k = 1; // ok
    j + 1; // ok
    var j = 2; // error

    for (let i = 0; i < 10; i++) {

        // j still exists

    }
}