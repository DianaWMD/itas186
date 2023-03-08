# Lab – Chapter 22 - Session

Author: Bill Dou \
Email: bill.dou@itas.ca \
Updated on Mar 5, 2023

## Complete the following tasks.

You can use the files you made in lab2 to finish this assignment.

1. Create a private page: `private.php` and put the following content:
    ```
    <?php

    // Write code to verify the login status

    echo "Private page";

    ```
2. Create a table `users` in a database (you can create a new one or use existing database. DO NOT use any system database like mysql etc), this table should have 2 fields: id, email and password
3. Create a file `login.php` to display login form and submit the form to `doLogin.php` which will be created in next step.
4. Create a file `doLogin.php` to process the authentication.
    In this file, you need to connect to database and compare the email/password submitted from the form with the ones (you can manually insert one record) in database.
    - If matched, note the auth status in session file and redirect user to that private page you created in step 1; 
    - Otherwise, redirect user back to login form and display a notification message like "The email or password is incorrect."
5. In `private.php`, create a `logout` button to let use to sign out (Keep in mind that you need to destroy the session) and redirect user to login page with a successful logout message.
6. If a logged-in user attempts to access the login form, redirect them to a private page.

Tips: 
1. You can store the notification message in session so it can be reachable anywhere.
2. That successful logout message doesn't need to saved in session as the session was deleted.
3. You may create a `logout.php` to process the session destroy and then redirect use to login form.


## Submission
Once you have completed the assignment, please submit it in portal before Mar 14, 2023 11:59PM.

