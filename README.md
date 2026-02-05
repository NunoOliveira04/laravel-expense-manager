# 💰 Laravel Expense Manager

A modern, full-stack expense management application built with **Laravel 11** and **MySQL**. Features user authentication, expense tracking by category, and a sleek dark-themed UI.

![PHP](https://img.shields.io/badge/PHP-8.2+-777BB4?style=flat-square&logo=php&logoColor=white)
![Laravel](https://img.shields.io/badge/Laravel-11-FF2D20?style=flat-square&logo=laravel&logoColor=white)
![MySQL](https://img.shields.io/badge/MySQL-8.0+-4479A1?style=flat-square&logo=mysql&logoColor=white)

## ✨ Features

- **User Authentication** - Register, login, logout with session management
- **Expense CRUD** - Create, read, update, and delete expenses
- **Category Tracking** - Organize expenses by custom categories
- **User Isolation** - Each user only sees their own expenses
- **Dark Theme UI** - Modern, aesthetic dark interface
- **Responsive Design** - Works on desktop and mobile
- **Cache Prevention** - Secure logout (no back-button bypass)

## 🖼️ Screenshots

<img width="971" height="840" alt="image" src="https://github.com/user-attachments/assets/62a61e75-3403-449b-a4a7-218bb5a9cfac" />
<img width="971" height="840" alt="image" src="https://github.com/user-attachments/assets/62a61e75-3403-449b-a4a7-218bb5a9cfac" />

<img width="1127" height="722" alt="image" src="https://github.com/user-attachments/assets/c2d77968-ecb3-47e3-9ca3-1afe81fe7718" />
<img width="1127" height="722" alt="image" src="https://github.com/user-attachments/assets/c2d77968-ecb3-47e3-9ca3-1afe81fe7718" />



## 🚀 Getting Started

### Prerequisites

- PHP 8.2 or higher
- Composer
- MySQL 8.0+
- Node.js & npm (optional, for asset compilation)

### Installation

1. **Clone the repository**
   ```bash
   git clone https://github.com/NunoOliveira04/laravel-expense-manager.git
   cd laravel-expense-manager
   ```

2. **Install dependencies**
   ```bash
   composer install
   ```

3. **Environment setup**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

4. **Configure database**
   
   Edit `.env` file with your database credentials:
   ```env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=expense_manager
   DB_USERNAME=your_username
   DB_PASSWORD=your_password
   ```

5. **Run migrations**
   ```bash
   php artisan migrate
   ```

6. **Start the server**
   ```bash
   php artisan serve
   ```

7. **Access the application**
   
   Open [http://localhost:8000](http://localhost:8000) in your browser.

## 📁 Project Structure

```
├── app/
│   ├── Http/Controllers/
│   │   ├── AuthController.php      # Authentication logic
│   │   └── ExpenseController.php   # Expense CRUD operations
│   ├── Models/
│   │   ├── User.php                # User model with expenses relation
│   │   └── Expense.php             # Expense model
│   └── Middleware/
│       └── NoCacheHeaders.php      # Prevents browser cache on protected routes
├── database/migrations/            # Database schema
├── resources/views/
│   ├── auth/                       # Login & Register views
│   ├── expenses/                   # Expense management views
│   └── layouts/                    # Main layout template
└── routes/web.php                  # Application routes
```

## 🛠️ Tech Stack

- **Backend:** Laravel 11, PHP 8.2+
- **Database:** MySQL with Eloquent ORM
- **Frontend:** Blade Templates, Custom CSS
- **Authentication:** Laravel's built-in Auth
- **Font:** Inter (Google Fonts)

## 📝 API Routes

| Method | URI | Description |
|--------|-----|-------------|
| GET | `/login` | Login page |
| POST | `/login` | Authenticate user |
| GET | `/register` | Registration page |
| POST | `/register` | Create new user |
| POST | `/logout` | Logout user |
| GET | `/` | List expenses |
| GET | `/expenses/create` | New expense form |
| POST | `/expenses` | Store expense |
| GET | `/expenses/{id}/edit` | Edit expense form |
| PUT | `/expenses/{id}` | Update expense |
| DELETE | `/expenses/{id}` | Delete expense |

## 🤝 Contributing

Contributions are welcome! Feel free to open issues or submit pull requests.

## 📄 License

This project is open-sourced under the [MIT License](LICENSE).

---

Made with ❤️ using Laravel

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
