# PHP Foreach Loop with References and Nested Arrays

This repository demonstrates an uncommon error in PHP related to using references in foreach loops when dealing with nested or associative arrays.  The code showcases how incrementing array values using references inside a foreach loop behaves differently depending on the array's structure. This behavior can be particularly problematic when working with complex data structures if not carefully considered.

## Bug Description
The provided `bug.php` file contains PHP code that attempts to increment the values of an array using a function that utilizes references within a `foreach` loop. While this works correctly for simple numerical arrays, the result is unexpected when the array is nested or associative. This inconsistency stems from how PHP handles references in these scenarios.

## Solution
The solution file (`bugSolution.php`) offers a revised function that avoids unintended consequences. The solution iterates over the array elements by value, copying elements to a temporary array, to ensure proper incrementing for various array structures, avoiding the issues caused by referencing within nested arrays.