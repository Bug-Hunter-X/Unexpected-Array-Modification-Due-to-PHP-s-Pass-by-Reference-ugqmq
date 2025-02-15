To avoid unintended modifications of the original array, you have two primary solutions:

1. **Pass by value:** Use the `&` to explicitly prevent passing by reference.

```php
function modifyArray(array $arr) {
  $arr[] = 'new element';
  return $arr; //Return the modified array
}

$myArray = ['a', 'b', 'c'];
$myArray = modifyArray($myArray); //Assign the returned array
print_r($myArray); // Output: Array ( [0] => a [1] => b [2] => c [3] => new element )
```

This creates a copy of the array within the function, ensuring that the original array remains unchanged. Note that the return is necessary to access the modified array.

2. **Create a copy:**  Explicitly create a copy of the array before passing it to the function.

```php
function modifyArray(array $arr) {
  $arr[] = 'new element';
}

$myArray = ['a', 'b', 'c'];
$myArrayCopy = $myArray;  // Create a copy
modifyArray($myArrayCopy);
print_r($myArray); // Output: Array ( [0] => a [1] => b [2] => c )
print_r($myArrayCopy); // Output: Array ( [0] => a [1] => b [2] => c [3] => new element )
```

This method preserves the original array and allows modification of the copy.