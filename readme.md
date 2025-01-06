# Learn Php

## Table of Content

1. [Introduction to PHP](#introduction-to-php)
2. [Variables in PHP](#variables-in-php)
3. [Concatenation in PHP](#concatenation-in-php)
4. [String Interpolation](#string-interpolation)
5. [Data Types](#data-types)
6. [Control Structures](#control-structures)
7. [User Input](#user-input)
8. [Arrays](#arrays)
9. [Include/Require](#include/require)
10. [Functions](#functions)
    11 [Reference](#reference)

---

# Introduction to PHP

PHP (Hypertext Preprocessor) is a popular server-side scripting language for web development. It's easy to learn and widely used in frameworks like Laravel.

# Variables in PHP

Variables in PHP are declared using the `$` symbol. For example:

In PHP, there are three main types of comments, each with different syntax. Here's a breakdown of their differences:

```php
<?php
// echo "This line is disabled.";
/*
echo "This is also disabled.";
echo "More lines are disabled.";
*/
# Mostly not Used

$name = "John";
$age = 25;
echo "My name is $name and I am $age years old.";
?>
```

# Concatenation in PHP

To concatenate strings, use the dot (.) operator:

```php
<?php
$firstName = "John";
$lastName = "Doe";
echo $firstName . " " . $lastName; // Outputs: John Doe
?>
```

# String Interpolation

String interpolation is a feature in PHP that allows you to insert (or interpolate) the value of a variable directly into a string, making it easier to write and read dynamic strings. This only works when the string is enclosed in double quotes (""), not single quotes ('').

```php
<?php
$language = "PHP";
echo "I love $language";  // Outputs: I love PHP
echo 'I love $language';  // Outputs: I love $language
?>
```

# Data Types

PHP supports a variety of data types to help developers handle different kinds of information effectively. Understanding these data types is crucial for building robust and efficient PHP applications.

## Scalar Data Types

- ### Integer

Represents whole numbers (e.g., 42, -10).

Example:

```php
$age = 25;
```

- ### Float (Double)

Represents decimal numbers (e.g., 3.14, -2.5).

Example:

```php
$price = 99.99;
```

- ### String

Represents a sequence of characters (e.g., "Hello World").

Example:

```php
$greeting = "Hello, PHP!";
```

- ### Boolean

Represents two possible states: true or false.

Example:

```php
$is_logged_in = true;
```

## Compound Data Types

- ### Array

Represents a collection of values, indexed or associative.

Example:

```php
$fruits = ["Apple", "Banana", "Cherry"];
```

- ### Object

Represents instances of classes containing both data and methods.

Example:

```php
class Car {
public $make;
public $model;

    public function __construct($make, $model) {
        $this->make = $make;
        $this->model = $model;
    }

}

$myCar = new Car("Toyota", "Corolla");
```

## Special Data Types

- ### NULL

Represents a variable with no value.

Example:

```php
$value = null;
```

- ### Resource

Represents external resources like database connections or file handles.

Example:

```php
$file = fopen("example.txt", "r");
```

## Type Juggling and Casting

PHP dynamically converts between data types as needed, but you can also explicitly cast types.

Example of casting:

```php
$number = (int) "42";
```

# Control Structures

They are used to control the flow of the Program

## Conditional Statements

- ### if Statement

Executes code if a condition is true.

Example:

```php
if ($age > 18) {
echo "You are an adult.";
}

```

- ### if-else Statement

Executes one block of code if the condition is true, another if it is false.

Example:

```php
if ($age > 18) {
echo "You are an adult.";
} else {
echo "You are a minor.";
}
```

- ### elseif Statement

Allows multiple conditions to be tested.

Example:

```php
if ($score > 90) {
    echo "A grade";
} elseif ($score > 75) {
echo "B grade";
} else {
echo "C grade";
}
```

- ### switch Statement

Selects one block of code to execute from many options.

Example:

```php
$day = "Monday";
switch ($day) {
    case "Monday":
        echo "Start of the work week.";
        break;
    case "Friday":
        echo "End of the work week.";
        break;
    default:
        echo "Midweek days.";
}
```

- ### match Statement

Introduced in PHP 8.0, match is a more powerful and concise alternative to switch. It uses strict comparisons (===), returns values directly, and does not require break statements.

```php
$status = 200;

$message = match ($status) {
    200 => 'OK',
    404 => 'Not Found',
    500 => 'Internal Server Error',
    default => 'Unknown Status',
};

echo $message; // Output: OK
```

## Looping Statements

- ### While Loop

Executes a block of code as long as the condition is true.

Example:

```php
$i = 1;
while ($i <= 5) {
    echo $i;
    $i++;
}
```

- ### For Loop

Executes a block of code a specific number of times.

Example:

```php
for ($i = 1; $i <= 5; $i++) {
    echo $i;
}
```

- ### Do-while Loop

Executes a block of code at least once, then repeats as long as the condition is true.

```php
$i = 1;
do {
    echo $i;
    $i++;
} while ($i <= 5);
```

- ### Foreach Loop

Iterates over each element in an array.

```php
$fruits = ["Apple", "Banana", "Cherry"];
foreach ($fruits as $fruit) {
    echo $fruit;
}
```

## Break and Continue

- ### break
  Exits the current loop or switch.

```php
for ($i = 1; $i <= 5; $i++) {
    if ($i == 3) {
        break;
    }
    echo $i;
}
```

- ### continue
  Skips the current iteration of a loop and moves to the next.

```php
for ($i = 1; $i <= 5; $i++) {
    if ($i == 3) {
        continue;
    }
    echo $i;
}
```

## User Input

- ### fgets(STDIN)

The fgets(STDIN) function is used to read a line of input from the standard input (usually the console or terminal)

```php
<?php
// Prompting user for input
echo "Enter your name: ";

// Reading input from the user
$name = fgets(STDIN);

// Removing any trailing newline or extra spaces
$name = trim($name);

echo "Hello, $name!";
?>
```

## Arrays

- ### Indexed Array
  An indexed array in PHP is a type of array where values are stored using numerical indices (starting from 0 by default). These arrays are ideal for storing a collection of similar data where the order matters and keys are not required.

```php
$fruits = ["Apple", "Banana", "Cherry"];
echo $fruits[0]; // Output: Apple
```

- ### Associative Array

An associative array in PHP is a type of array that uses named keys (rather than numeric indices) to store and access values. These are particularly useful when you want to store data in key-value pairs, making it easier to work with structured data.

```php
$student = [
    "name" => "John Doe",
    "age" => 20,
    "major" => "Computer Science"
];
echo $student["name"]; // Output: John Doe
```

## Include/Require

In PHP, require and include are used to include files into your PHP scripts. They allow you to reuse code, such as headers, footers, database connections, or shared functions, across multiple files. Here's a detailed explanation of both:

---

- ### include

The include statement includes and evaluates the specified file. If the file is not found, it throws a warning but the script continues to execute.

Syntax:

```php
include 'filename.php';
```

Use Cases:

Ideal when the file being included is optional.

Use when the rest of the script can work even if the file is missing.

Behavior:

Generates a warning (E_WARNING) if the file is missing but does not stop the script execution.

Example:

```php
include 'header.php'; // Includes the header file
echo "Welcome to my website!"; // This will still execute even if header.php is missing.
```

---

- ### require

The require statement includes and evaluates the specified file. If the file is not found, it throws a fatal error and stops the script execution.

Syntax:

```php
require 'filename.php';
```

Use Cases:

Ideal when the file being included is critical for the application to function.

Use when the script cannot continue without the file.

Behavior:

Generates a fatal error (E_COMPILE_ERROR) if the file is missing, halting script execution.

Example:

```php
require 'config.php'; // Includes the configuration file
echo "This will not execute if config.php is missing.";
```

# Functions

Functions are blocks of reusable code that perform specific tasks. PHP functions can accept parameters and return values. They can be classified into built-in functions and user-defined functions.

## Syntax of Functions:

- ### Defining a Function:

```php
function greet($name) {
    return "Howdy, $name!\n";
}
```

- ### Calling a Function:

```php
echo greet("Robert");
```

## Types of Functions:

- ### Built-in Functions
  PHP provides a wide range of built-in functions, such as:

```php
strlen(): Get the length of a string.
array_merge(): Merge arrays.
date(): Get the current date/time.
```

- ### User-Defined Functions
  These are custom functions created by developers to perform specific tasks.

```php
function greet($name) {
    return "Hello, $name!";
}

echo greet("John"); // Output: Hello, John!
```

## Function Parameters

- ### Default Parameters
  Functions can have default values for parameters.

```
function greet($name = "Guest") {
    return "Hello, $name!";
}

echo greet(); // Output: Hello, Guest!
```

## Return Types and Type Declarations

PHP allows specifying the types of function parameters and return values to ensure type safety.

- ### Parameter Type Declarations:

```php
function add(int $a, int $b): int {
    return $a + $b;
}

echo add(2, 3); // Output: 5
```

- ### Return Type Declaration:

```php
function getGreeting(): string {
    return "Hello, World!";
}

echo getGreeting(); // Output: Hello, World!
```

## Strict Mode

Enforce strict type checking by declaring strict types at the top of the file.

```php
declare(strict_types=1);

function multiply(int $a, int $b): int {
    return $a * $b;
}

echo multiply(3, "4"); // Error in strict mode
```

- 💡 **Note:**
  Strict mode applies only to function/method arguments and return types. Operations like arithmetic or comparisons are not affected by strict mode:

```php
<?php
declare(strict_types=1);

$result = "5" + 10; // Allowed: PHP still coerces string to int in operations
echo $result; // Outputs: 15
```

## Variadic Functions Arguments:

Variadic functions in PHP allow a function to accept a variable number of arguments. This is useful when the number of inputs to a function isn't fixed. Starting from PHP 5.6, variadic functions are implemented using the ... operator (also known as the splat operator).

---

- ### How Variadic Functions Work:

#### The `...` Operator:

It collects multiple arguments passed to a function into an array.

##### Syntax:

```php
function myFunction(...$args) {
  // $args will be an array
}
```

##### Features:

- Arguments can be of any type (int, string, object, etc.).
- The collected arguments are accessible as an indexed array.

Examples

```php
function sum(...$numbers) {
    $total = 0;
    foreach ($numbers as $number) {
        $total += $number;
    }
    return $total;
}

echo sum(1, 2, 3, 4); // Output: 10
```

### Usage with Other Parameters:

You can mix variadic arguments with regular parameters, but the variadic parameter must always come last.

```php
function greet($greeting, ...$names) {
    foreach ($names as $name) {
        echo "$greeting, $name!\n" ;
    }
}

greet('Hello', 'John', 'Jane', 'Doe');
// Output:
// Hello, John!
// Hello, Jane!
// Hello, Doe!

```

### Unpacking Arguments into Variadic Functions:

The `...` operator can also unpack an array into separate arguments when calling a variadic function.

```php
function displayNames(...$names) {
    foreach ($names as $name) {
        echo $name."\n";
    }
}

$namesArray = ['Alice', 'Bob', 'Charlie'];
displayNames(...$namesArray);
// Output:
// Alice
// Bob
// Charlie

```

## Anonymous Functions (Closures)

Anonymous functions, also known as closures, are functions without names. They're often used as callbacks, assigned to variables, or passed as arguments to other functions. In PHP, anonymous functions are implemented using the function keyword, and they can also capture variables from their surrounding scope.

### Basic Syntax

```php
$greet = function($name) {
    return "Hello, $name!";
};

echo $greet("Ali"); // Output: Hello, Ali!
```

### Key Features

#### 1. Assigning to Variables

Anonymous functions can be stored in variables for later use.

```php
$multiply = function($a, $b) {
    return $a * $b;
};

echo $multiply(5, 3); // Output: 15
```

#### 2. Passing as Callbacks

They are commonly used as arguments to functions like array_map or array_filter.

```php
$numbers = [1, 2, 3, 4, 5];
$squared = array_map(function($n) {
    return $n * $n;
}, $numbers);

print_r($squared); // Output: [1, 4, 9, 16, 25]
```

#### 3. Accessing Variables from Outer Scope

Anonymous functions can use variables from their parent scope using the use keyword.

```php
$factor = 3;
$multiply = function($num) use ($factor) {
    return $num * $factor;
};

echo $multiply(5); // Output: 15
```

# Reference

References allow you to manipulate variables through their references rather than directly. This affects how variables are passed between functions, manipulated, and stored.

## Passing Variables

- ### Pass by Value (Default):
  - When you assign or pass a variable to a function, PHP creates a copy of the variable.
  - Changes to the copy do not affect the original variable.

```php
function increment($num) {
    $num++;
}

$value = 10;
increment($value);
echo $value; // Output: 10
```

- ### Pass by Reference:

  - Instead of copying the value, PHP passes the variable's reference. Changes made to the parameter inside the function affect the original variable.

  - use the & symbol to pass by reference.

```php
function increment(&$num) {
    $num++;
}

$value = 10;
increment($value);
echo $value; // Output: 11

```
