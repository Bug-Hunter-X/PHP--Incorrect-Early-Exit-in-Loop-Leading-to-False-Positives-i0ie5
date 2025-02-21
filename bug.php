```php
<?php
function my_function($arr) {
  foreach ($arr as $value) {
    if ($value === 0) {
      return false; //Incorrect early exit
    }
  }
  return true;
}

$arr = [1, 2, 3, 0, 4, 5];
var_dump(my_function($arr)); //Outputs bool(false) 
?>
```