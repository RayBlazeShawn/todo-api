# ToDo API - Laravel Backend

This project serves as the backend API for a ToDo application, built with Laravel. It handles user authentication and CRUD operations for ToDo items, providing a RESTful interface for the Vue.js frontend.

## Getting Started

These instructions will get you a copy of the project up and running on your local machine for development and testing purposes.

### 1. Clone the Repository

Clone the project repository to your local machine:

```bash
git clone https://github.com/RayBlazeShawn/todo-api.git
cd todo-api
````

### 2. Install Dependencies

```bash
composer install
```

### 3. Generate Application Key

```bash
php artisan key:generate
```

### 4. Generate JWT Secret

```bash
php artisan jwt:secret
```
### 5. Set Up Environment Variables


```bash
Copy .env.example to .env and customize the variables to match your local environment. Pay special attention to your database settings and the JWT_SECRET generated in the previous step.
```
### 6. Migrate the Database


```bash
php artisan migrate
```
### 7. Serve the Application

```bash
php artisan serve
```
The API will be accessible at http://localhost:8000 by default.


### 8. Testing

Create a `.env.testing` file and add the following configurations:

```env
APP_ENV=testing
APP_KEY=generate_this_with_php_artisan_key:generate --env=testing
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=todo_test
DB_USERNAME=your_username
DB_PASSWORD=your_password
JWT_SECRET=use_the_generated_jwt_secret_from_.env

```
### 9. Running Tests


```bash
php artisan test

```



