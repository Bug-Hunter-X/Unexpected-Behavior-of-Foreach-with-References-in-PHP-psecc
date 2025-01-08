```php
function increment_array_values(array &$arr) {
  foreach ($arr as &$value) {
    $value++;
  }
}

$myArray = [1, 2, 3];
increment_array_values($myArray);
print_r($myArray); // Output: Array ( [0] => 2 [1] => 3 [2] => 4 )

$myArray2 = ['a' => 1, 'b' => 2, 'c' => 3];
increment_array_values($myArray2); //This line causes the unexpected behavior
print_r($myArray2); // Output: Array ( [a] => 2 [b] => 3 [c] => 4 )

$myArray3 = [1, 2, [3,4]];
increment_array_values($myArray3);
print_r($myArray3); // Output: Array ( [0] => 2 [1] => 3 [2] => Array ( [0] => 3 [1] => 4 ) )
```