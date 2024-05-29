# Laravel To-Do List Application

This is a simple to-do list application built with Laravel. It allows users to create, read, update, and delete tasks.

## Requirements

- PHP 7.3 or higher
- Composer
- SQLite (for simplicity)

## Installation

1. Clone the repository:
   ```sh
   git clone https://github.com/yourusername/todo-app.git
   cd todo-app


Install dependencies:

sh
Copy code
composer install
Set up environment variables:

sh
Copy code
cp .env.example .env
Generate application key:

sh
Copy code
php artisan key:generate
Configure the SQLite database:
Open the .env file and update the database settings:

ini
Copy code
DB_CONNECTION=sqlite
DB_DATABASE=/path/to/database.sqlite
Create the SQLite database file:

sh
Copy code
touch /path/to/database.sqlite
Run the database migrations:

sh
Copy code
php artisan migrate
Serve the application:

sh
Copy code
php artisan serve
The application should now be running at http://localhost:8000.
