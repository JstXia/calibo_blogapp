# Calibo Blog App

A Laravel blog application for practicing database setup, Artisan, Blade, and full post CRUD.

## Requirements

- PHP 8.3 or newer
- Composer
- MySQL (or use the local SQLite configuration already in `.env`)

## Run locally

1. Install PHP dependencies:

   ```sh
   composer install
   ```

2. Copy `.env.example` to `.env` if one does not already exist, then set your database credentials. Create the database in MySQL first:

   ```sql
   CREATE DATABASE lastname_blog_db;
   ```

   Set `DB_DATABASE`, `DB_USERNAME`, and `DB_PASSWORD` in `.env` to match your MySQL setup. The checked-in `.env.example` uses `lastname_blog_db` as the assignment placeholder; replace `lastname` with your surname if required.

3. Generate an application key and create the tables:

   ```sh
   php artisan key:generate
   php artisan migrate
   ```

4. Start the development server:

   ```sh
   php artisan serve
   ```

5. Open <http://127.0.0.1:8000/posts>.

The app includes a resource controller and Blade views for creating, listing, viewing, editing, and deleting posts. Post titles and bodies are validated, and only those fields can be mass assigned.
