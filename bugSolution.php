```php
function increment_array_values_safe(array $arr) {
  $newArray = [];
  foreach ($arr as $key => $value) {
    if (is_array($value)) {
        $newArray[$key] = increment_array_values_safe($value); //Recursive call for nested arrays
    } else {
        $newArray[$key] = $value + 1;
    }
  }
  return $newArray;
}

$myArray = [1, 2, 3];
$incrementedArray = increment_array_values_safe($myArray);
print_r($incrementedArray); // Output: Array ( [0] => 2 [1] => 3 [2] => 4 )

$myArray2 = ['a' => 1, 'b' => 2, 'c' => 3];
$incrementedArray2 = increment_array_values_safe($myArray2);
print_r($incrementedArray2); // Output: Array ( [a] => 2 [b] => 3 [c] => 4 )

$myArray3 = [1, 2, [3,4]];
$incrementedArray3 = increment_array_values_safe($myArray3);
print_r($incrementedArray3); // Output: Array ( [0] => 2 [1] => 3 [2] => Array ( [0] => 4 [1] => 5 ) )
```