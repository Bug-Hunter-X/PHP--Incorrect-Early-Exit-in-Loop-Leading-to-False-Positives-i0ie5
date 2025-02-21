# PHP: Incorrect Early Exit in Loop Leading to False Positives

This repository demonstrates a common, yet subtle, error in PHP code: premature loop termination leading to inaccurate boolean results. The `my_function` function is designed to check if an array contains the value 0.  However, it incorrectly returns `false` immediately upon encountering a 0, without considering subsequent elements in the array.  This could lead to false positive results, especially in scenarios where there might be zeros further in the array.

The `bug.php` file shows the incorrect code; `bugSolution.php` provides a corrected version.
