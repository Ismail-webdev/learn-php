# Learn Php

## Table of Content

1. [Introduction to PHP](#introduction-to-php)
2. [Variables in PHP](#variables-in-php)
3. [Concatenation in PHP](#concatenation-in-php)
4. [String Interpolation](#string-interpolation)
5. [Data Types](#data-types)
6. [Control Structures](#control-structures)
7. [User Input](#user-input)

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

### Integer

Represents whole numbers (e.g., 42, -10).

Example:

```php
$age = 25;
```

### Float (Double)

Represents decimal numbers (e.g., 3.14, -2.5).

Example:

```php
$price = 99.99;
```

### String

Represents a sequence of characters (e.g., "Hello World").

Example:

```php
$greeting = "Hello, PHP!";
```

### Boolean

Represents two possible states: true or false.

Example:

```php
$is_logged_in = true;
```

## Compound Data Types

### Array

Represents a collection of values, indexed or associative.

Example:

```php
$fruits = ["Apple", "Banana", "Cherry"];
```

### Object

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

### NULL

Represents a variable with no value.

Example:

```php
$value = null;
```

### Resource

Represents external resources like database connections or file handles.

Example:

```php
$file = fopen("example.txt", "r");
```

### Type Juggling and Casting

PHP dynamically converts between data types as needed, but you can also explicitly cast types.

Example of casting:

```php
$number = (int) "42";
```

# Control Structures

They are used to control the flow of the Program

## Conditional Statements

### if Statement

Executes code if a condition is true.

Example:

```php
if ($age > 18) {
echo "You are an adult.";
}

```

### if-else Statement

Executes one block of code if the condition is true, another if it is false.

Example:

```php
if ($age > 18) {
echo "You are an adult.";
} else {
echo "You are a minor.";
}
```

### elseif Statement

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

## Looping Statements

### while Loop

Executes a block of code as long as the condition is true.

Example:

```php
$i = 1;
while ($i <= 5) {
    echo $i;
    $i++;
}
```

## User Input

### fgets(STDIN)

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
