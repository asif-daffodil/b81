<?php
// Arithmetic operators
/**
 * + Addition
 * - Subtraction
 * * Multiplication
 * / Division
 * % Modulus
 * ** Exponentiation
 */

// Logical operators
/**
 * and &&
 * or ||
 * xor
 */

// Comparisons operators
/**
 * == Equal
 * === Identical
 * != Not equal
 * <> Not equal
 * !== Not identical
 * > Greater than
 * < Less than
 * >= Greater than or equal to
 * <= Less than or equal to
 * <=> Spaceship
 */

// Assignment operators
/**
 * = Assign
 * += Add and assign
 * -= Subtract and assign
 * *= Multiply and assign
 * /= Divide and assign
 * %= Modulus and assign
 * **= Exponentiation and assign
 */

// Incrementing/Decrementing operators
/**
 * ++$x Pre-increment
 * $x++ Post-increment
 * --$x Pre-decrement
 * $x-- Post-decrement
 */

/*
In PHP, operator precedence determines the order in which operators are evaluated in an expression. Operators with higher precedence are evaluated before operators with lower precedence. If operators have the same precedence, their associativity (left or right) determines the order of evaluation.

Here is a list of PHP operators in order of precedence from highest to lowest:

1. **[** (array subscript)
2. **->** (object access)
3. **::** (scope resolution)
4. **++**, **--** (post-increment, post-decrement)
5. **~** (bitwise NOT)
6. **!** (logical NOT)
7. **-**, **+** (unary minus, unary plus)
8. **(int)**, **(float)**, **(string)**, **(array)**, **(object)**, **(bool)**, **(unset)** (type-casting)
9. **\*\*** (exponentiation)
10. **\*, /, %** (multiplication, division, modulo)
11. **+, -** (addition, subtraction)
12. **.** (string concatenation)
13. **<<, >>** (bitwise shift left, bitwise shift right)
14. **<, <=, >, >=** (comparison)
15. **==, !=, ===, !==** (equality, non-equality)
16. **&** (bitwise AND)
17. **^** (bitwise XOR)
18. **|** (bitwise OR)
19. **&&** (logical AND)
20. **||** (logical OR)
21. **?:** (ternary conditional)
22. **=, +=, -=, *=, /=, .=, %=, &=, |=, ^=, <<=, >>=** (assignment)
23. **and** (logical AND)
24. **xor** (logical XOR)
25. **or** (logical OR)

Parentheses can be used to override the default precedence and force the evaluation of a specific part of an expression first.

Here's a simple example to illustrate operator precedence:

```php
$result = 2 + 3 * 4; // Multiplication has higher precedence than addition
echo $result; // Output: 14
```

In this example, the multiplication operation (`3 * 4`) is performed first due to its higher precedence, and then the result is added to 2.

It's a good practice to use parentheses to make your code more readable and to explicitly specify the order of operations when necessary.

*/