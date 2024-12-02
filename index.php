<?php $randVar1 = "John Doe" ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title><?php echo "About " . $randVar1; ?></title>
</head>
<body>
    <?php
    // A single line comment
    # Another single line comment
    /* Multiline
    comment
    */

    # Printing to screen
    echo "<h1>Random Header Text</h1>";
    echo "<p>Random Paragraph Text</p>";

    print("<p>You can print with brackets</p>");
    print "<p>or without
    them</p>";

    # Variables
    $randVar = "Cats"; # $RandVar != $randVar;

    # Printing variables
    echo "<p>", $randVar, " are funny</p>";
    # OR using string concatenation
    echo "<p>" . $randVar . " are funny</p>";
    # Perform special print statements using the 'printf' method
    printf("<p>My name is %s I'm %d years old and pi is equal to %.2f</p>", 'John Doe', 27, 3.142);

    # Other variable data types
    $boolExample1 = false; # 0 is false
    $boolExample2 = true; # any number apart from 0 is true

    $intExample1 = 23; # can hold a non-decimal number between -2,147,483,648 to 2,147,483,647

    $stringExample1 = "Hello World";

    $arrayExample1 = array("Sun", "Moon", "Stars");
    
    $floatExample1 = 19.9911111;
    # Print float using the number_format method
    echo "<p>Price: $", number_format($floatExample1,2), "</p>";

    # Working with numeric data using standard operators
    # +, -, *, /, %, ++, --

    # STRINGS
    $firstName = "John";
    $lastName = "Doe";
    # Concatenating variables with other characters
    echo "<br />";
    $fullName = $firstName . ' ' . $lastName;

    # Checking the length of strings using the 'strlen()' function
    echo "<br />";
    echo "The length of the fullName variable is: " . strlen($fullName);
    echo "<br />";

    # To count the number of words in a string use the str_word_count() function
    echo "The number of words in the fullName variable are: " . str_word_count($fullName);
    echo "<br />";

    # Use strrev() to reverse a string
    echo "The reverse of the fullName variable is: " . strrev($fullName);
    echo "<br />";

    # Use strpos() to search for a text within a string
    $someString = "The quick brown fox jumps over the lazy dog";
    // The PHP strpos() function searches for a specific text within a string. If a match is found, the function returns the character position of the first match. If no match is found, it will return FALSE.
    echo "The location of 'fox' in the someString variable is: " . strpos($someString, "fox");
    echo "<br />";
    echo "The location of 'jumped' in the someString variable is: " . strpos($someString, "jumped");
    echo "<br />";
    
    # To replace text within a string, use the 'str_replace()' function
    echo "Replacing the 'world' with 'Dolly' in the 'Hello world!' sentence, we get: " . str_replace("world", "Dolly", "Hello world!");
    echo "<br />";

    /*
    * NOTE: You can use escape characters in the strings as well.
    * Example of escape characters are: \', \", \\, \n, \r, \t, \$ --> Since it is used for naming variables.
    */

    # Differences between single quotes and double quotes in php
    echo "How do \"quotes\" differ. Calling $fullName <br />"; # Here the variable is replaced with it's value
    // echo 'How do quotes differ $fullName <br />'; # This will show everything as is.

    # PHP CONSTANTS
    /* To create a constant in php, use the 'define()' function:
    * Syntax --> 'define(name, value, case-insensitive)'
    * Parameters:
    * - name: Specifies the name of the constant
    * - value: Specifies the value of the constant
    * - case-insensitive: Specifies whether the constant name should be case-insensitive. Default is false
    */
    echo "<br />";
    define("PI", 3.142);
    echo "The value of PI is: " . PI;
    echo "<br />"; 
    # echo "The value of PI is: " . pi; # Will output an error since the case-insensitive is false by default
    echo "<br />";
    define("GREETING", "Good Day!");
    echo "Using case-sensitive = false here for GREETING: " . GREETING;
    echo "<br />";
    # PHP Constant Arrays
    // Constant Arrays were only introduced in PHP7 and is also created using the same define() function. Example:
    define("fruits", [
        "mango",
        "orange",
        "apple",
        "grape",
        "pineapple"
    ]);
    // We can then call the array in a normal echo statement
    echo "This is a constant array of fruits: " . fruits[0];
    echo "<br />";

    # Final note on Constants in PHP
    // Constants are Global meaning they can be accessed from any where in the code. From within functions or classes. An example using a function:
    function myGlobalTest() {
        echo "I am calling the GREETING constant from within a function: " . GREETING;
        echo "<br />";
    }

    // Calling the function
    myGlobalTest();
    
    # PHP CASTING
    // THere are two main ways of type casting in PHP:
    # - Automatic or Implicit Type Casting
    # - Explicit Type Casting
    // For the Implicit casting, php is smart enough to know what you are trying to do if you try to multiply a string with a numeric datatype. Example:
    
    $strNum = "30";
    echo "I am multiplying a string with a float to get: " . $strNum * $floatExample1;
    echo "<br />";

    // For Explicit casting, you initiate the casting whenever you want or need to. Example:

    $intFloatExample1 = (int) $floatExample1;
    echo "Converting " . $floatExample1 . " into int: " . $intFloatExample1;
    echo "<br />";
    /* Other Type Casting Methods
    * - Convert to array --> (array)
    * - Convert to bool --> (bool)
    * - Convert to int64 --> (int64)
    * - Convert to object --> (object)
    * - Convert to float --> (float)
    * - Convert to double --> (double)
    * - Convert to string --> (string)
    */
    # Use the 'gettype()' function to get the type of a variable or any piece of data. Example:
    echo "I want to get the type of the \$strNum variable.\n It's type is: " . gettype($strNum) . "<br />";
    # To check if a variable is of a certain data type use the following:
    /* Some Type Checking Functions
    * - Check if is_array()
    * - Check if is_bool()
    * - Check if is_integer()
    * - Check if is_object()
    * - Check if is_null()
    * - Check if is_string()
    * - Check if is_float()
    * - Check if is_finite()
    * - Check if is_file()
    * - Check if is_double()
    * - etc...
    */
    // Example 1:
    echo "The data type of \$floatExample1 is a float. True/False? : " . is_float($floatExample1) . " 1 means true and 0/null means false" . "<br />";
    // Example 2:
    echo "The data type of \$floatExample1 is a float. True/False? : " . is_float($intFloatExample1) . " 1 means true and 0/null means false" . "<br />";
    # Note that the value of the returned result is either 1 for true and 0 if false.
    
    # PHP OPERATORS
    // Operators are used to perform operations on variables and values. 
    // PHP divides the operators in the following groups:
    /*
    * - 1. Arithmetic operators --> +, -, *, /, %, **(Exponentiation)
    * - 2. Assignment operators --> =, +=, -=, *=, /=, %=
    * - 3. Comparison operators --> {
        * - == -- Equal -- $x == $y -- Returns true if $x is equal to $y

        * - === -- Identical -- $x === $y -- Returns true if $x is equal to $y and they are of the same type

        * - != -- Not Equal -- $x != $y -- Returns true if $x is not equal to $y

        * - <> -- Not Equal -- $x <> $y -- Returns true if $x is not equal to $y

        * - !== -- Not Identical -- $x !== $y -- Returns true if $x is not equal to $y or are not of the same type

        * - > -- Greater than -- $x > $y -- Returns true if $x is greater than $y
        
        * - < -- Less than -- $x < $y -- Returns true if $x is less than $y

        * - >= -- Greater than -- $x >= $y -- Returns true if $x is greater than or equal to $y

        * - <= -- Less than -- $x <= $y -- Returns true if $x is less than or equal to $y

        * - <=> -- Less than -- $x <=> $y -- Returns an integer less than, or equal to, or greater than zero, depending on if $x is less than, equal to, or greater than $y. Introduced in PHP 7
    }

    * - 4. Increment/Decrement operators --> {
        * - ++$x -- Pre-increment -- Increments $x by 1, then returns $x
        * - $x++ -- Post-increment -- Returns $x, then increments $x by 1
        * - --$x -- Pre-decrement -- Decrements $x by 1, then returns $x
        * - $x-- -- Post-decrement -- Returns $x, then decrements $x by 1
    }
    * - 5. Logical operators -- > {
        * - and -- And -- $x and $y -- True if both $x and $y are true
        * - or -- Or -- $x or $y -- True if either $x or $y is true
        * - xor -- Xor -- $x xor $y -- True if either $x or $y is true, but not both
        * - && -- And -- $x && $y -- True if both $x and $y are true
        * - || -- Or -- $x || $y -- True if either $x or $y is true
        * - ! -- Not -- !$x -- True if $x is not true
    }
    * - 6. String operators --> {
        * - . -- Concatenation -- $txt1 . $txt2 -- Concatenation of $txt1 and $txt2
        * - .= -- Concatenation assignment -- $txt1 .= $txt2 -- Appends $txt2 to $txt1
    }
    * - 7. Array operators --> {
        * - + -- Union -- $x + $y -- Union of $x and $y
        * - == -- Equality -- $x == $y -- Returns true if $x and $y have the same key/value pairs
        * - === -- Identity -- $x === $y -- Returns true if $x and $y have the same key/value pairs in the same order and of the same types
        * - != -- Inequality -- $x != $y -- Returns true if $x is not equal to $y
        * - <> -- Inequality -- $x <> $y -- Returns true if $x is not equal to $y
        * - !== -- Not identity -- $x !== $y -- Returns true if $x is not identical to $y
    }
    * - 8. Conditional assignment operators --> {
        * - ?: -- Ternary -- $x = expr1 ? expr2 : expr3 -- Returns the value of $x. The value of $x is expr2 if expr1 = TRUE. The value of $x is expr3 if expr1 = FALSE

        * - ?? -- Null coalescing -- $x = expr1 ?? expr2 -- Returns the value of $x. The value of $x is expr1 if expr1 exists, and is not NULL. If expr1 does not exist, or is NULL, the value of $x is expr2. Introduced in PHP 7
    }
    */

    # PHP if...else...elseif Statements
    // Like other languages, PHP conditional statements are used to perform different actions based on the result of the condition.
    /* The if Statement
        SYNTAX
        if (condition) {
            code to be executed if condition is true;
        }
    Example:
    */
    $currentHour = date("H");
    echo "<h2>If Example</h2>";
    if ($currentHour < "8") {
        echo "<p>It's not time to close</p>";
    }
    
    /* The if...else Statement
        SYNTAX
        if (condition) {
            code to be executed if condition is true;
        } else {
            code to be executed if condition is false;
        }
    Example:
    */
    $currentHour2 = date("H");
    echo "<h2>If...Else Example</h2>";
    if ($currentHour2 < "8") {
        echo "<p>It's not time to close</p>";
    } else {
        echo "<p>We closed at 8am</p>";
    }
    
    /* The if...elseif...else Statement
        SYNTAX
        if (condition) {
            code to be executed if condition is true;
        } elseif (condition) {
            code to be executed if first condition is false and this condition is true
        } else {
            code to be executed if all conditions are false;
        }
    Example:
    */
    $currentHour3 = date("H");
    echo "<h2>If...ElseIf...Else Example</h2>";
    if ($currentHour3 < "6") {
        echo "<p>It's not time to start the class</p>";
    } elseif ($currentHour3 < "8") {
        echo "<p>Class started at 6am and will close at 8am</p>";
    } else {
        echo "<p>We closed at 8am</p>";
    }

    # PHP switch Statement
    // Use the 'switch statement to select one of many blocks of code to be executed
    /* SYNTAX
    switch (n) {
        case label1:
            code to be executed if n = label1;
            break;
        case label2:
            code to be executed if n = label2;
            break;
        case label3:
            code to be executed if n = label3;
            break;
            ...
        default:
            code to be executed if n is different from all labels;
    }
    Example:
    */
    echo "<h2>Switch Example</h2>";
    $favColor = "red";

    switch ($favColor) {
        case 'red':
            echo "<p>Your favorite color is red</p>";
            break;
        case 'blue':
            echo "<p>Your favorite color is blue</p>";
            break;
        case 'green':
            echo "<p>Your favorite color is green</p>";
            break;
        default:
            echo "<p>Your favorite color is neither red, blue, nor green!</p>";
            break;
    }

    # PHP LOOPS
    /* 
     * In PHP, we have the following loop types:
     * - 1. 'while' - loops through a block of code as long as the specified condition is true.
     * - 2. 'do...while' - loops through a block of code once, and then repeats the loop as long as the specified condition is true.
     * - 3. 'for' - loops through a block of code a specified number of times.
     * - 4. 'foreach' - loops through a block of code for each element in an array.
     */

     # PHP 'while' Loop
     /* SYNTAX
      * while (condition is true) {
      *     code to be executed;
      * }
    
      * Example:
      */
    # The example below displays the numbers from 1 to 5
    $loopCounter1 = 1;
    echo "<h2>While Loop Example 1</h2>";
    while($loopCounter1 <= 5) {
        echo "<p>The number is: $loopCounter1 <br /></p>";
        $loopCounter1++;
    }
    # The example below counts to 100 by tens
    $loopCounter2 = 0;
    echo "<h2>While Loop Example 2</h2>";
    while($loopCounter2 <= 100) {
        echo "<p>The number counting by tens is: $loopCounter2 <br /></p>";
        $loopCounter2 += 10;
    }
    # PHP 'do...while' Loop
    /* SYNTAX
     * do {
     *      code to be executed;
     * } while (condition is true);

     * Example:
     */
    # The example below displays the numbers from 1 to 5
    $doWhileCounter1 = 1;
    echo "<h2>Do...While Loop Example 1</h2>";
    do {
        echo "<p>The \$doWhileCounter1 number is: $doWhileCounter1 <br /></p>";
        $doWhileCounter1++;
    } while($doWhileCounter1 <= 5);
    # The example below sets the $doWhileCounter2 variable to 6, then it runs the loop, and then the condition is tested
    $doWhileCounter2 = 6;
    echo "<h2>Do...While Loop Example 2</h2>";
    do {
        echo "<p>The \$doWhileCounter2 number is: $doWhileCounter2 <br /></p>";
        $doWhileCounter2++;
    } while($doWhileCounter2 <= 5);

    # PHP for Loop
    /* SYNTAX
     * for (init counter; test counter; increment counter) {
     *      code to be executed for each iteration;
     * }
     * Parameters:
     * - init counter: Initialize the loop counter value
     * - test counter: Evaluate for each loop iteration. If it evaluates to TRUE, the loop continues. If it evaluates to FALSE, the loop ends.
     * - increment counter: Increases the loop counter value

     * Example:
     */
    echo "<h2>For Loop Example 1</h2>";
    # The example below displays the numbers from 0 to 10:
    for ($i=0; $i <= 10; $i++) { 
        echo "<p>The for loop counter is: $i <br /></p>";
    }
    echo "<h2>For Loop Example 2</h2>";
    # The example below counts to 100 by tens:
    for ($i=0; $i <= 100; $i+=10) { 
        echo "<p>The for loop counter, \$i, counting by tens is: $i <br /></p>";
    }

    # PHP foreach Loop
    /* SYNTAX
    * foreach ($array as $value) {
    *     code to be executed;
    * }
    * Explanation:
    * For every loop iteration, the value of the current array element is assigned to '$value' and the array pointer is moved by one, until it reaches the last array element

    * Example:
    */
    echo "<h2>The foreach Example 1</h2>";
    $colors = array("red", "green", "blue", "yellow");
    # This example will print the colors in an array
    foreach ($colors as $value) {
        echo "<p>The current color is: $value</p>";
    }
    
    echo "<h2>The foreach Example 2</h2>";
    $marks = array("John"=>"65", "Jane"=>"76", "Jack"=>"82");
    # This example will output both the keys and the values of the given array ($marks):
    echo "<h3>PHP Marks for Batch 1 (Student Name --> Marks)</h3>";
    foreach ($marks as $key => $value) {
        echo "<p>$key --> $value</p>";
    }

    # PHP Break and Continue
    // Like other programming languages, you can use conditionals to apply the 'break' and 'continue' statements.
    // Use the 'break' to jump out of a loop
    // Use the 'continue' to skip one iteration of a loop

    # PHP Functions
    /* PHP Built-in Functions
    * PHP has over 1000 built-in functions that can be called directly, from within a script, to perform a specific task.
    * View the W3Schools PHP built-in functions reference when you need a function.
    # PHP User Defined Functions
    * Besides the built-in PHP functions, it is possible to create your own functions.
    * - A function is a block of statements that can be used repeatedly in a program
    * - A function will not execute automatically when a page loads.
    * - A function will be executed by a call to the function.

    * A user-defined function declaration starts with the word 'function':
    SYNTAX:
    * function functionName() {
    *     code to be executed;
    * }
    * NOTE: A function name must start with a letter or an underscore. Function names are NOT case-sensitive in PHP.
    * EXAMPLE:
    */

    // Creating the function
    function writeMsg() {
        echo "<p>This message was created by the 'writeMsg()' function</p>";
        echo "<br />";
    }

    // Calling the function
    writeMsg();

    # Using Arguments
    function familyName($fName) {
        echo "<p>&bull; $fName Doe.</p>";
    }

    echo "<h3>My Family Members</h3>";
    familyName("John");
    familyName("Jane");
    familyName("Janet");
    familyName("Jack");
    familyName("Jude");

    # Using Multiple Arguments
    function newFamilyName($fName, $year) {
        echo "<p>&bull; $fName Doe. Born in $year</p>";
    }

    echo "<h3>My Family Members Take 2</h3>";

    newFamilyName("John", "1975");
    newFamilyName("Jane", "1978");
    newFamilyName("Janet", "1983");
    newFamilyName("Jack", "1989");
    newFamilyName("Jude", "1993");

    # Working 'strict'
    // Since PHP is a loosely typed language, there are cases when the wrong datatype is sent to functions. Example:
    function addNumbers(int $a, int $b) {
        return $a + $b;
    }

    echo "<h3>Strict Handling</h3>";
    echo "<p>The sum of 2 and 3 is " . addNumbers(2, "3") . "</p>";
    // Since 'strict' is NOT enabled, "3" is changed to int(3), and it will return 10

    # Specifying Strict
    // TO specify 'strict' we need to set 'declare(strict_types=1);'. This must be on the very first line of the PHP file.
    // Refer to the 'strict.php' file for example.

    # Working With Default Argument Value
    // Creating the function with default value(s)
    function setStudentNumbers(int $studentCount = 12) {
        echo "<p>The number students in lab 1 are: $studentCount</p>";
    }

    echo "<h3>Calling the Function with Defaults</h3>";
    // Calling the function with default value(s)
    setStudentNumbers(10);
    setStudentNumbers(8);
    setStudentNumbers(); // will use the default value of 12
    setStudentNumbers(20);

    # Returning Values
    function addFloats(float $x, float $y) {
        // $z = $x + $y;
        return $x + $y;
    }
    echo "<h3>Calling the Function with Returns</h3>";
    echo "<p> 6.8 + 1.2 = " . addFloats(6.8, 1.2) . "</p>";
    echo "<p> 5.3 + 2.4 = " . addFloats(5.3, 2.4) . "</p>";
    echo "<p> 598.564 + 413.23 = " . addFloats(598.564, 413.23) . "</p>";

    # Declaring Return Types
    // Like the type declaration which is governed by the 'strict' declaration, we can also declare a type for a function.
    // This means we can directly tell the function to return a specific type.
    // To declare a type for the function return, add a colon ( : ) and the type right before the opening curly ( { ) bracket when declaring the function. Example:
    
    echo "<h3> Functions With Return Types<h3/>";
    function addDecimals(float $x, float $y) : float {
        return $x + $y;
    }

    echo addDecimals(1.2, 5.2);
    echo "<br />";

    # You can also specify a return type different from the argument types:
    function divideNumbers(int $a, int $b) : float {
        return $a / $b;
    }

    echo divideNumbers(3, 2);
    echo "<br />";

    // OR
    function floatToIntAddition(float $a, float $b) : int {
        return $a / $b;
    }

    echo floatToIntAddition(3.5, 2.1);
    echo "<br />";

    # Passing Arguments by Reference
    /* 
    * In PHP, arguments are usually passed by value, which means that a copy of the value is used in the function and the variable that was passed into the function cannot be changed.

    * When a function argument is passed by reference, changes to the function to the argument also change the variable that was passed in. TO turn a function argument into a reference, the ( & ) operator is used:
    * Example using a pass-by-reference argument to update a variable:
    */
    
    function addFive(&$value) {
        $value += 5;
    }
    echo "<h3>Passing Arguments by Reference</h3>";
    $testNum = 2;
    echo "<p>Current \$testNum value is : " . $testNum . "</p>";
    addFive($testNum);
    echo "<p>After passing through the 'addFive()' function, the \$testNum value is now : " . $testNum . "</p>";

    # PHP Arrays
    /*
     * An array stores multiple values in one single variable.
     * In PHP, we use the 'array()' function to create an array.
     * There are currently three types of arrays:
     * - Indexed arrays - Arrays with a numeric index
     * - Associative arrays - Arrays with named keys
     * - Multidimensional arrays - Arrays containing one or more arrays
     * 
     * An example of an array:
     */

    $peripherals = array("Keyboard", "Mouse", "Printer", "Scanner");

    # To count or get the length of an Array, we can use the 'count()' function.

    echo "<p>The length of the \$peripherals array is: ". count($peripherals) . "</p>";
    // There are more PHP Array references available on w3Schools

    # Indexed Arrays
    // Just like other languages, the arrays are indexed from 0 as the first

    // We can assign by index:
    $peripherals[2] = "WebCam";

    // We can also access the values by index:
    echo "<h3> A paragraph made of array calls</h3>";
    echo "<p>The school's computer has a ". $peripherals[0] . " and a " . $peripherals[1] . " but not a " . $peripherals[2] . " and a " . $peripherals[3] . ".</p>";

    // Using a for loop to unpack an array
    $arrLength = count($peripherals);
    echo "<ul>";
    for ($x = 0; $x < $arrLength; $x++) {
        echo "<li>" . $peripherals[$x] . "</li>";
    }
    echo "</ul>";

    # Associative Arrays
    // Associative arrays are arrays that use named keys that you assign to them. There are two ways to create this type of array:
    // 1.
    // $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
    // OR 2.
    // $age['Peter'] = "35";
    // $age['Ben'] = "37";
    // $age['Joe'] = "43";

    // Example:
    $penDrivePrices = array("4GB"=>"30",
                            "8GB"=>"40",
                            "16GB"=>"55",
                            "32GB"=>"70");
    echo "<p>A 4GB pend drive is now: GHc" . $penDrivePrices['4GB'] . " and a 32GB is GHc" . $penDrivePrices['32GB'] . "</p>";

    // To loop through an Associative array, we will have to use a 'foreach' loop. Example:
    echo "<table>";
    echo "<thead>";
    echo "<th> <td>Capacity</td> <td>Price</td> </th>";
    echo "</thead>";
    echo "<tbody>";
    foreach ($penDrivePrices as $capacity => $price) {
        echo "<tr>";
        echo "<td>" . $capacity . "</td>" . "<td>" . $price . "</td>";
        echo "</tr>";
    }
    echo "</tbody>";
    echo "</table>";
    
    # Multidimensional Arrays
    // A multidimensional array is an array containing one or more arrays.
    // PHP supports multidimensional arrays that are two, three, four, five or more levels deep. However, arrays more than three levels deep are hard to manage for most people.

    // * The dimension of an array indicates the number of indices you need to select an element:
    // * - For a two-dimensional array, you need two indices to select an element
    // * - For a three-dimensional array, you need three indices to select an element

    // * A two-dimensional array
    echo "<h3>Two Dimensional Array Example</h3>";

    $someCars = array (
        array("Volvo", 22, 18),
        array("BMW", 15, 13),
        array("Subaru", 5, 2),
        array("Land Rover", 17, 15),
    );

    # Printing out a teo-dimensional array
    echo $someCars[0][0] . ": In stock: " . $someCars[0][1] . ", sold: " . $someCars[0][2] . ". <br />";
    echo $someCars[1][0] . ": In stock: " . $someCars[1][1] . ", sold: " . $someCars[1][2] . ". <br />";
    echo $someCars[2][0] . ": In stock: " . $someCars[2][1] . ", sold: " . $someCars[2][2] . ". <br />";
    echo $someCars[3][0] . ": In stock: " . $someCars[3][1] . ", sold: " . $someCars[3][2] . ". <br />";

    echo "<h4>Two Dimensional Array Example using For-Loop</h4>";

    for ($row = 0; $row < 4; $row++) {
        echo "<p><b>Row number $row</b></p>";
        echo "<ul>";
        for ($col = 0; $col < 3; $col++) {
            echo "<li>" . $someCars[$row][$col] . "</li>";
        }
        echo "</ul>";
    }

    # PHP Sorting Arrays
    // The elements in an array can be sorted in alphabetical or numerical order, descending or ascending order
    // Here are the PHP sort functions with examples:
    // * 'sort()' - sort arrays in ascending order.
    echo "<h4>Sort Array</h4>";
    // Example:
    $sortCars = array("Volvo", "BMW", "Toyota");
    sort($sortCars);

    var_dump($sortCars);

    echo "<br />";

    $sortNumbers = array(4, 6, 2, 22, 11);
    sort($sortNumbers);

    var_dump($sortNumbers);
    echo "<br />";

    // * 'rsort()' - sort arrays in descending order
    echo "<h4>'rsort' Array</h4>";
    rsort($sortCars);
    var_dump($someCars);
    echo "<br />";

    rsort($sortNumbers);
    echo "<br />";

    // * 'asort()' - sort associative arrays in ascending order, according to the value
    // Sorting the $penDrivePrices associative arrays
    echo "<h4>'asort' Array</h4>";
    asort($penDrivePrices);

    var_dump($penDrivePrices);
    echo "<br />";

    // * 'ksort()' - sort associative arrays in ascending order, according to the key
    echo "<h4>'ksort' Array</h4>";
    krsort($penDrivePrices);
    var_dump($penDrivePrices);
    echo "<br />";

    // * 'arsort()' - sort associative arrays in descending order, according to the value
    echo "<h4>'arsort' Array</h4>";
    arsort($penDrivePrices);
    var_dump($penDrivePrices);
    echo "<br />";

    // * 'krsort()' - sort associative arrays in descending order, according to the key
    echo "<h4>'krsort' Array</h4>";
    krsort($penDrivePrices);
    var_dump($penDrivePrices);
    echo "<br />";


    # PHP Regular Expressions
    /* Regular Expression
     * A regular expression is a sequence of characters that forms a search pattern.
     * When you search for data in a text, you can use this search pattern to describe what you are searching for.
     * A regular expression can be a single character, or a more complicated pattern.
     * Regular expressions can be used to perform all types of text search and text replace operations.
     * 
     * SYNTAX
     * In PHP, regular expressions are strings composed of delimiters, a pattern and optional modifiers:
     * $exp = "/w3schools/i";
     * Where:
     * '/' is the delimiter
     * 'w3schools' is the pattern that is being searched for.
     * 'i' is a modifier that makes the search case-sensitive.
     * 
     * The delimiter can be any character that is not a letter, number, backslash or space. The most common delimiter is the forward slash (/), but when your pattern contains forward slashes, it is convenient to choose other delimiters such as # or ~
    */

    # Regular Expression Functions
    // PHP provides a variety of functions that allow us to use regular expressions. The 'preg_match()', 'preg_match_all()' and 'preg_replace()' functions are some of the most commonly used ones:
    //  FUNCTION        |   DESCRIPTION
    // preg_match()     | Returns 1 if the pattern was found in the string and 0 if not
    // preg_match_all() | Returns the number of times the pattern was found in the string, which may also be 0
    // preg_replace()   | Returns a new string where matched patterns have been replaced with another string

    # Using preg_match() - The function will tell you whether a string contains matches of a pattern.
    echo "<h3>Testing RegEx</h3>"; 
    echo "<h4>Testing 'preg_match()'</h4>"; 
    $someString = "I will visit Zongo tomorrow";
    $pattern = "/zongo/i";
    echo "<p>'preg_match' returned [ " . preg_match($pattern, $someString) . " ] so we are going to get the paragraph below.</p>";
    if (preg_match($pattern, $someString)) {
        echo "<p>You are entering a risky location. You're herby advised</p>";
    } else {
        echo "<p>You can go as and when you like. Safe Journey</p>";
    }

    # Using preg_match_all() - The function will tell you how many matches were found for a pattern in a string.
    echo "<h4>Testing 'preg_match_all()'</h4>";
    $someString = "<p>The rain in SPAIN falls mainly on the plains.</p>";
    $pattern = "/ain/i";

    echo $someString;
    echo "<p>The paragraph above has { ". preg_match_all($pattern, $someString) . " } words with 'ain' in them.</p>";

    # Using preg_replace() - The function will replace all of the matches of the pattern in a string with another string.
    
    echo "<h4>Testing 'preg_replace()'</h4>";
    $someString = "<p>I am reading System Engineering at IPMC</p>";
    $pattern = "/system/i";

    echo "<h5>Paragraph before replacing word</h5>";
    echo $someString;
    echo "<h5>Paragraph after replacing word</h5>";
    $replacedString = preg_replace($pattern, "Software", $someString);
    echo $replacedString;

    # Regular Expression Modifiers
    // Modifiers can change how a search is performed
    // MODIFIER |   DESCRIPTION
    //  i       | Performs a case-insensitive search        
    //  m       | Performs a multiline search (patterns that search for the beginning or end of a string will match the beginning or end of each line)        
    //  u       | Enables correct matching of UTF-8 encoded patterns
















    ?>

</body>
</html>