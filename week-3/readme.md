# ITAS 186 – Chapter 02 and 03 - File and Array

Author: Bill Dou \
Email: bill.dou@itas.ca \
Updated on Jan 25, 2023

## Complete the following tasks.

1. Remove specific element by value from an array in PHP
    - Take an array with list of month names.
    - Take a variable with the name of value to be deleted.
    - You can use PHP array functions or foreach loop.
    ```php
    $delete_item = 'march';
    // take a list of months in an array
    $months = array('jan', 'feb', 'march', 'april', 'may');

    // Put your code here

    // print array to see latest values
    var_dump($months);
    // Expected result: array('jan', 'feb', 'april', 'may')
    ```
2. Removed all values below 0 from a given array using **array_filter**
    ```php
    $numbers = [23, -34, 222, 1000, -7, 3, -23];

    // Put your code here

    // Expected result:[23, 222, 1000, 3]
    ```
3. Lowercase all items in array
    ```php
    $array = ['Apple', 'BANANA', 'Mango', 'orange', 'GRAPES'];

    // Put your code here

    // Expected result: ['apple', 'banana', 'mango', 'orange', 'grapes']
    ```

4. Generate SSH key for the dev.itas.ca

    Reference: https://docs.github.com/en/authentication/connecting-to-github-with-ssh/generating-a-new-ssh-key-and-adding-it-to-the-ssh-agent

## Reading Homework
Chapter 4 in textbook.

