# Learn Php

## Table of Content

1. [Introduction to PHP](#introduction-to-php)
2. [Variables in PHP](#variables-in-php)
3. [Concatenation in PHP](#concatenation-in-php)
4. [String Interpolation](#string-interpolation)

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
