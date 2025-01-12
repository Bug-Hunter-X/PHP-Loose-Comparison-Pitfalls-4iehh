The solution is to use strict comparison (`===`) instead of loose comparison (`==`).  Strict comparison checks both the value and type. This ensures that the comparison is accurate and prevents unexpected results caused by type juggling.
```php
<?php
$string = '123';
$integer = 123;

if ($string === $integer) {
    echo "Values are equal and of the same type.";
} else {
    echo "Values are not equal or are of different types.";
}
?>
```