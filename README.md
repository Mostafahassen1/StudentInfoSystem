

- [StudentInfoSystem](#Student-Info-System)
- [Technologies Used](#Technologies-Used)
- [Features](#Features)
- [File Structure](#File-Structure)
- [Setup](#Setup)
- [Usage](#Usage)
- [Database Structure](#Database-Structure)
- [Installation](#Installation)
- [Notes](#Notes)

# StudentInfoSystem


This project is a simple web-based Student Management Information System that allows users to add, view, update, and delete student records.

## Technologies Used

- HTML
- CSS
- PHP
- MySQL
- Bootstrap 5
- Font Awesome
  
## Features

- Add new students
- View student list
- Update existing student records
- Delete student records

## File Structure

- `index.php`: Main page with navigation options
- `user_data_form.php`: Form to add new students
- `display_students_form.php`: Displays the list of students
- `delete_student_form.php`: Form to delete a student record
- `update_student_form.php`: Form to update student information
- `add.php`: Handles adding new student records
- `update.php`: Handles updating existing student records
- `delete.php`: Handles deleting student records
- `conn.php`: Database connection and initialization
- `style.css`: CSS styles for the project

## Setup

1. Ensure you have a web server with PHP and MySQL installed.
2. Import the project files to your web server directory.
3. Update the database credentials in `conn.php` if necessary.
```yml
  $USER_NAME = "your_mysql_username";
  $PASSWORD = "your_mysql_password";
  $Host_Name = "localhost";
```
4. Access the project through your web browser.
   ```bash
   /index.php
   ```

## Usage

1. Navigate to the main page (`index.php`).
2. Choose an option:
   - "Adding new students" to add a new student record
   - "Viewing the student list" to see all student records
   - "Deleting records" to remove a student record
   - "Updating existing records" to modify student information



## Database Structure

The project uses a MySQL database named `STUDENT` with a table called `info_student`. The table structure is as follows:

- `id`: INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY
- `firstName`: VARCHAR(30) NOT NULL
- `lastName`: VARCHAR(30) NOT NULL
- `email`: VARCHAR(50) NOT NULL
- `birthday`: DATE NOT NULL
- `reg_date`: TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
## Installation

1. Clone the repository:

   ```bash
   git clone https://github.com/yourusername/student-management-system.git
   ```
   ```bash
   cd StudentInfoSystem
   ```
## Notes

- Ensure all form fields are filled when adding or updating student records.
- The project uses prepared statements to prevent SQL injection.
- Basic error handling is implemented, but further improvements can be made for production use.
