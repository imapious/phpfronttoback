<?php
    // Single line comment
    # Single line comment
    /*
        Multiline
        Comment
    */

    #VARIABLES
    /*
        -Prefix $
        -Start with a letter or an underscore
        -Only letters, numbers and underscores
        -Case sensitive
    */

    #DATA TYPES
    /*
        String
        Integers
        Floats
        Booleans
        Arrays
        Objects
        NULL
        Recource
    */
    $output = 'Hello World!';
    $num1 = 4;
    $num2 = 10;
    $sum = $num1 + $num2;

    $string1 = 'Hello';
    $string2 = 'World';
    $greeting = $string1 . ' ' . $string2 . '!'; // Concatenation
    $greeting2 = "$string1 $string2"; // Parse the variable

    $string3 = "They're Here";

    $float1 = 4.4;
    $bool1 = true;

    define('GREETING', 'Hello Everyone', true); // constant string

    echo GREETING;

?>