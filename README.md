# php-CRUD-Project
This is a simple PHP-based student registration system that allows users to:

Register new student accounts

Login with existing credentials

View, edit, and delete student records

Access a dashboard after successful login

Features
User registration with name, email, and password

Secure login system with session management

CRUD (Create, Read, Update, Delete) operations for student records

Responsive Bootstrap interface

MySQL database integration

File Structure
index.php - Registration form for new students

login.php - User login page

dashboard.php - Welcome page after successful login

tables.php - Displays all student records in a table format

edit.php - Form to edit existing student records

delete.php - Handles deletion of student records

register.sql - Database schema and sample data

Installation
Clone this repository to your web server:

text
git clone [repository-url]
Import the database:

Create a MySQL database named "register"

Import the register.sql file into your database

Configure database connection:

Update the database connection details in all PHP files if needed (default is localhost, root, no password)

Access the application through your web browser

Requirements
PHP 7.0 or higher

MySQL/MariaDB database

Web server (Apache, Nginx, etc.)

Security Notes
⚠️ Important Security Considerations:

This is a basic demonstration system and lacks several security features needed for production:

Passwords are stored in plain text (should be hashed)

No input validation/sanitization

Vulnerable to SQL injection

Basic session management

Do not use this in production environments without significant security improvements.

Usage
Register new students through the index.php page

Login with registered credentials at login.php

After login, you'll be redirected to dashboard.php

Access the student records table at tables.php

Use the Edit and Delete buttons to manage records

License
This project is open-source and available for educational purposes.
