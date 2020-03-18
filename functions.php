<?php

    # FUNCTIONS - Block of code that can be repeatedly code

    /*
        Camel Case - myFunction() , naming functions
        Lower Case - my_function() , naming variable
        Pascal Case - MyFunction() , naming classes
    */

    // Create Simple Function
    function simpleFunction(){
        echo 'Hello World';
    }

    // Run Simple Function
    // simpleFunction();

    // Function with Param
    function sayHello($name = 'World'){
        echo "Hello $name<br>";
    }

    // sayHello('Joe');
    // sayHello('Bob');
    // sayHello('Tim');

    // Return Value
    function addNumbers($num1, $num2){
        return $num1 + $num2;
    }

    // echo addNumbers(2, 3);

    // By Reference
    $myNum = 10;

    function addFive($num){
        $num += 5; // $num = $num + 5;
    }

    function addTen(&$num){
        $num += 10; // $num = $num + 10;
    }

    addFive($myNum);
    echo "Value: $myNum <br>";

    addTen($myNum);
    echo "Value: $myNum <br>";
?>