
# 🚀CRUD Application with PHP and MySQL

This repository contains a CRUD (Create, Read, Update, Delete) application built with PHP and MySQL. The application provides a simple and intuitive interface for managing data stored in a MySQL database. With this CRUD application, users can perform basic database operations such as creating new records, reading existing records, updating records, and deleting records.

## ✨Features 

- Create: Add new records to the database by filling out a form and submitting the data. ✍️
- Read: Retrieve and display existing records from the database in a tabular format. 📖
- Update: Edit and update the information of specific records in the database. 🔄
- Delete: Remove unwanted records from the database. ❌


## Installation and Setup ⚙️

To set up and run the CRUD application on your local machine, follow these steps:

1. Clone the repository:
```bash
  git clone https://github.com/Misbahkk/-CRUD-Application-with-PHP-MySQL.git

```
2. Ensure that you have PHP and MySQL installed on your system.
3. Import the database schema:
- Open the MySQL command-line tool or a GUI tool like phpMyAdmin.
- Create a new database.
- Import the SQL file provided `(database.sql)` into the newly created database.
4. Update the database connection details:
- Open the `config.php` file in the root directory of the project.
- Modify the database connection variables (`$host`, `$username`, `$password`, `$database`) to match your MySQL database configuration.

5.Start a local web server:
- If you have PHP installed, navigate to the project directory and run the following command:
```bash
php -S localhost:8000

```
- Access the application in your web browser by visiting http://localhost:8000. 🌐

    
## Usage 🖥️

- Upon accessing the application, you will be presented with a list of records from the database.
- Use the provided forms to create new records or update existing ones.
- To delete a record, simply click on the corresponding delete button.


## License📝

This project is licensed under the [MIT License](https://choosealicense.com/licenses/mit/).


## Acknowledgements 🙏

This CRUD application was developed to showcase the fundamental concepts of PHP and MySQL. Special thanks to the PHP and MySQL communities for their valuable resources and documentation that helped in the development process. 👏
