# Laravel 11 Backend API

This is a Laravel 11 RESTful API backend that provides authentication (login & register) and product management features (CRUD operations). It is intended to be used with a frontend client such as Vue.js or any JavaScript-based SPA.

## Features

- User registration
- User login (token-based with Sanctum)
- Product creation
- Product listing
- Product editing
- Product deletion
- Middleware-protected routes for authenticated users

## Requirements

- PHP >= 8.2
- Composer
- Laravel 11
- PostgreSQL or MySQL
- Laravel Sanctum

## Setup Instructions

1. **Clone the Repository**
   ```bash
   git clone https://github.com/jaime-code-developer/crud_vue_laravel_pg_back
   cd your-laravel-project
   ```

2. **Install Dependencies**
   ```bash
   composer install
   ```

3. **Create Environment File**
   ```bash
   cp .env.example .env
   ```

4. **Update `.env` File**

   Set your database credentials and app URL:
   ```
   APP_URL=http://localhost:8000
   DB_CONNECTION=pgsql
   DB_HOST=127.0.0.1
   DB_PORT=5432
   DB_DATABASE=your_database
   DB_USERNAME=your_username
   DB_PASSWORD=your_password
   ```

5. **Generate App Key**
   ```bash
   php artisan key:generate
   ```

6. **Run Migrations**
   ```bash
   php artisan migrate
   ```

7. **Run the Server**
   ```bash
   php artisan serve
   ```

## API Endpoints

### Authentication

- `POST /api/register` - Register new user
- `POST /api/login` - Login user and receive token
- `POST /api/logout` - Logout user (requires token)

### Products (Requires Authentication)

- `GET /api/products` - List all products
- `POST /api/products` - Create new product
- `PUT /api/products/{id}` - Update product
- `DELETE /api/products/{id}` - Delete product

## License

This project is open-source and available under the [MIT license](LICENSE).
