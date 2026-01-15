
# 📘 Student Management System

A **Student Management System** web application built with **Laravel (PHP)** for managing student data, classes, and related functionality.

This repository contains the full backend and frontend code using Laravel framework. It’s designed to help administrators and teachers efficiently manage student records.

---

## 🚀 Features

✔️ Manage student information (CRUD)  
✔️ Organized application structure using **Laravel MVC**  
✔️ Configurable database via Laravel migrations  
✔️ Clean and modular codebase for easy extension  
✔️ Authentication support (optional if you add it later)

> _You can expand features later — attendance tracking, roles (admin/teacher/student), reports, etc._

---

## 🧰 Tech Stack

| Component | Technology |
|-----------|------------|
| Backend | PHP (Laravel) |
| Frontend | Blade Templates + Bootstrap |
| Database | MySQL / MariaDB / SQLite |
| Dependency Management | Composer |
| Testing | PHPUnit |

---

## 📁 Project Structure

```plaintext
├── app/
├── bootstrap/
├── config/
├── database/
├── public/
├── resources/
│   ├── views/
│   ├── css/
│   └── js/
├── routes/
├── tests/
├── artisan
├── composer.json
└── README.md

```
## 🔧 Prerequisites

Before setting up locally, ensure you have:

PHP ≥ 8.x
Composer
A database

🏗️ Installation (Local Setup)

1.Clone the repository
```bash
git clone https://github.com/Shamodoshan/student-manegement.git
cd student-manegement
```

2.Install dependencies
```bash
composer install
```

3.Configure your database
Open .env and update:
```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database
DB_USERNAME=your_username
DB_PASSWORD=your_password
```

4.Run migrations
```bash
php artisan migrate
```

5.Serve the application
```bash
php artisan serve
```

Your app will be available at:
http://localhost:8000



📫 Contact / Support

If you have questions or want to propose features — feel free to open an Issue or reach out via GitHub Discussions!


---

