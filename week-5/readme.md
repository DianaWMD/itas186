# Lab – Chapter 05 - PHP Functions

Author: Bill Dou \
Email: bill.dou@itas.ca \
Updated on Feb 7, 2023

## Review last week lab

- Practice tasks
- Xdebug

## Complete the following tasks.

Create a PHP file named **functions.php** (it is in this repo) in your workspace.

1. Task 1: Create a function that calculates the average of two numbers and returns the result.
   Instructions:

   - Create a function named "average".
   - Define two parameters for the function, $num1 and $num2.
   - Calculate the average of the two numbers by adding them together and dividing by 2.
   - Return the result of the calculation.
   - Test the function by calling it and passing in two different numbers.

   ```php
   function average ($num1, $num2) {
       // code here
   }

   // Testing
   echo average(24, 6);
   // Expected 15
   ```

2. Task 2: Create a function that finds the maximum number from an array of numbers.
   Instructions:

   - Create a function named "find_max".
   - Define a parameter for the function, $numbers, that is an array of numbers.
   - Use a loop to iterate through the array and compare each number to find the maximum number.
   - Return the maximum number.
   - Test the function by calling it and passing in a few different arrays of numbers.

   ```php
   function find_max (array $numbers) {
       // code here
   }

   // Testing
   $nums = [53,6,16,59,8,18,62,39,22,26];
   var_dump(max($nums));
   // Expected 62
   ```

3. Create a function that removes all duplicates from an array of strings.
   Instructions:

   - Create a function named "remove_duplicates".
   - Define a parameter for the function, $words, that is an array of strings.
   - Use an array_unique function to remove duplicates from the array.
   - Return the modified array.
   - Test the function by calling it and passing in a few different arrays of strings.

   ```php
   function remove_duplicates (array $words) {
       // code here
   }

   // Testing
   $words = ['apple', 'pear', 'watermelon', 'apple', 'banana', 'banana', 'grape'];
   var_dump(remove_duplicates($words));
   // Expected ['apple', 'pear', 'watermelon', 'banana', 'grape']
   ```

## Reading Homework

Chapter 8 & 9 in textbook.
