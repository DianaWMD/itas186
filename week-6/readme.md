# Lab – Chapter 06 - Database

Author: Bill Dou \
Email: bill.dou@itas.ca \
Updated on Feb 14, 2023

## Review last week lab

- PHP functions

## Complete the following tasks.

1. Connect to your XAMPP database using phpMyAdmin:

   - Start your XAMPP server and make sure that both Apache and MySQL services are running.

   - Open your web browser and go to http://itas186php.local/phpmyadmin/. This will open the phpMyAdmin login page.

   - Enter your MySQL username and password in the login form. By default, the username is "root" and the password is blank.

   - Click on the "Go" button to log in to phpMyAdmin.

   - Once you are logged in, you can select the database you want to work with from the left-hand side navigation menu.

   - You can then use the various tabs and menus in phpMyAdmin to manage your database. For example, you can create new tables, run SQL queries, and import/export data.

2. DDL(Data Definition Language) and DML(Data Manipulation Language)
   - Create 3 tables
     - students: id, first_name, last_name, email, course_id (foreign key referring to courses table)
     - courses: id, name, description, instructor_id (foreign key referring to instructors table)
     - instructors: id, first_name, last_name
   - Populate some dummy data for these tables, like 5 students, 4 courses and instructors
3. Find out the students whose first name is beginning with S and N.

## Reading Homework

Chapter 6 in textbook.
