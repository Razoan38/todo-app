# Laravel To-Do List Application

This is a simple to-do list application built with Laravel. It allows users to create, read, update, and delete tasks.

## Requirements

- PHP 7.3 or higher
- Composer
- SQLite (for simplicity)

## Installation

1. Clone the repository:
   ```sh
   git clone https://github.com/Razoan38/todo-app.git
   cd todo-app

## Install dependencies: sh
    composer install
    
## Set up environment variables: sh  
   cp .env.example .env
   
## Configure the SQLite database:  
## Open the .env file and update the database settings: 
  DB_CONNECTION=sqlite
  DB_DATABASE=database/database.sqlite

## Run the database migrations: sh
    php artisan migrate

## Serve the application:sh
  php artisan serve
 
