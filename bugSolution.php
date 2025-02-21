```php
<?php
function my_function($arr) {
  foreach ($arr as $value) {
    if ($value === 0) {
      return false; 
    }
  }
  return true; //Corrected return statement
}

$arr = [1, 2, 3, 0, 4, 5];
var_dump(my_function($arr)); //Outputs bool(false)

$arr2 = [1,2,3,4,5];
var_dump(my_function($arr2)); //Outputs bool(true)
?>
```