# Portfolio Zidan

Laravel portfolio application showcasing projects, skills, and professional experience.

## Table of Contents
- [Prerequisites](#prerequisites)
- [Installation](#installation)
- [Configuration](#configuration)
- [Running the Application](#running-the-application)
- [Frontend Development](#frontend-development)
- [Database Setup](#database-setup)
- [Testing](#testing)
- [Deployment](#deployment)

## Prerequisites

Before you begin, ensure you have the following installed:

- PHP >= 8.1
- Composer
- Node.js (>= 16.x)
- npm or yarn
- MySQL (or your preferred database system)

## Installation

1. **Clone the repository**
   ```bash
   git clone <repository-url>
   cd portfolio_zidan
   ```

2. **Install PHP dependencies**
   ```bash
   composer install
   ```

3. **Install JavaScript dependencies**
   ```bash
   npm install
   # or
   yarn install
   ```

4. **Copy the environment file**
   ```bash
   cp .env.example .env
   ```

5. **Generate the application key**
   ```bash
   php artisan key:generate
   ```

## Configuration

1. **Environment Variables**
   
   Update the `.env` file with your specific configuration:
   - `APP_NAME`: Your application name
   - `APP_URL`: The URL where the application will be accessible
   - Database configuration:
     - `DB_CONNECTION`: Your database driver (mysql, pgsql, sqlite, sqlsrv)
     - `DB_HOST`: Database host (usually 127.0.0.1)
     - `DB_PORT`: Database port (3306 for MySQL)
     - `DB_DATABASE`: Database name
     - `DB_USERNAME`: Database username
     - `DB_PASSWORD`: Database password

2. **Mail Configuration** (optional)
   
   If you plan to use email functionality, configure the mail settings:
   - `MAIL_MAILER`: Mail driver (smtp, mail, sendmail, etc.)
   - `MAIL_HOST`: Mail server host
   - `MAIL_PORT`: Mail server port
   - `MAIL_USERNAME`: Mail server username
   - `MAIL_PASSWORD`: Mail server password

## Running the Application

### Development Server

1. **Start the Laravel development server**
   ```bash
   php artisan serve
   ```

2. **In a separate terminal, start the Vite development server**
   ```bash
   npm run dev
   # or
   yarn dev
   ```

   The application will be available at `http://127.0.0.1:8000`

### Frontend Development

The project uses Laravel Vite for asset management:

- `npm run dev` - Start the Vite development server with hot reloading
- `npm run build` - Build assets for production

## Database Setup

1. **Run migrations**
   ```bash
   php artisan migrate
   ```

2. **Seed the database (optional)**
   ```bash
   php artisan db:seed
   ```

## Testing

Run the test suite using PHPUnit:

```bash
# Run all tests
./vendor/bin/phpunit

# Or use Laravel's Artisan command
php artisan test
```

## Deployment

### Production Build

1. **Build frontend assets for production**
   ```bash
   npm run build
   ```

2. **Optimize the application**
   ```bash
   php artisan config:cache
   php artisan route:cache
   php artisan view:cache
   ```

3. **Set proper file permissions**
   ```bash
   chmod -R 755 storage bootstrap/cache
   ```

### Additional Deployment Notes

- Set `APP_ENV=production` in your `.env` file
- Set `APP_DEBUG=false` in production
- Ensure your web server points to the `/public` directory
- Configure your web server to handle URL rewriting

## Project Structure

- `app/` - Main application code
- `config/` - Application configuration files
- `database/` - Migrations, seeds, and factories
- `public/` - Publicly accessible files
- `resources/` - Assets, views, and raw resources
- `routes/` - Application routes
- `storage/` - Storage for files and cache
- `tests/` - Application tests

## Technologies Used

- [Laravel](https://laravel.com) - PHP Framework
- [Vite](https://vitejs.dev) - Build tool
- [Axios](https://github.com/axios/axios) - HTTP client
- [MySQL](https://www.mysql.com) - Database (default)

## Contributing

1. Fork the repository
2. Create a feature branch (`git checkout -b feature/amazing-feature`)
3. Commit your changes (`git commit -m 'Add amazing feature'`)
4. Push to the branch (`git push origin feature/amazing-feature`)
5. Open a Pull Request

## License

This project is open source and available under the [MIT License](LICENSE).