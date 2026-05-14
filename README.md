# RCH London LMS - Learning Management System

A comprehensive Learning Management System built with Laravel for RCH London. This platform allows institutions to manage programs, courses, enrollments, and student certificates with a complete admin dashboard.

## 🎯 Features

✅ **User Management**
- Student Registration & Authentication
- Role-based access control (Admin, Instructor, Student)
- User profile management
- Registration number generation

✅ **Program & Course Management**
- Create and manage Programs
- Add courses to programs
- Module-based learning structure
- Content upload and management

✅ **Student Enrollment**
- Course enrollment system
- Credit-based progress tracking
- Course status tracking (Enrolled, Waiting for Exam, Completed)

✅ **Exam & Certificate System**
- Online exam management
- Automatic certificate generation upon completion
- Certificate download functionality
- Certificate verification system

✅ **Admin Dashboard**
- Comprehensive admin panel
- Manage users, courses, and programs
- View analytics and reports
- Dynamic content management (logos, images, contacts)
- Role distribution to operators

✅ **Student Verification**
- Public verification system
- Search by registration number
- View enrollment and completion status
- Display certificate images

✅ **SEO Optimized & Non-Tech Friendly**
- Meta tags optimization
- SEO-friendly URLs
- User-friendly admin interface
- Easy content management

## 📋 System Requirements

- PHP >= 8.1
- MySQL >= 5.7
- Composer
- Node.js & NPM

## 🚀 Installation

```bash
git clone https://github.com/multisoftofficial-cmd/LMS.git
cd LMS
composer install
npm install
cp .env.example .env
php artisan key:generate
php artisan migrate --seed
php artisan serve
npm run dev
```

Visit `http://localhost:8000`

## 📁 Project Structure

```
LMS/
├── app/Models/              # Database models
├── app/Http/Controllers/    # Application controllers
├── database/migrations/     # Database migrations
├── resources/views/         # Blade templates
├── routes/                  # Route definitions
└── public/                  # Public assets
```

## 🔐 Default Admin Credentials

- Email: admin@rchlondon.co.uk
- Password: Admin@123

## 📝 License

MIT License
