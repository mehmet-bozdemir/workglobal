# 🧑‍💼 Laravel Job Portal

A full-featured job portal built using Laravel, where users can **post vacancies** or **apply for jobs**. The application features robust authentication, authorization, a search-enabled job board, and email integration for job applications.

---

## 🚀 Features

- ✅ **User Authentication** (Login/Register/Forgot Password)
- ✅ **User Roles & Policies** (Admin, Employer, Applicant)
- ✅ **Job Posting (CRUD)** for authenticated users
- ✅ **Job Application** with optional email notification
- ✅ **Bookmark Jobs** for later reference
- ✅ **Profile & Dashboard Pages**
- ✅ **Map Integration** using Mapbox or Leaflet for job location preview
- ✅ **Middleware-protected routes** for secure access control
- ✅ **Reusable View Components** with Blade
- ✅ **Responsive UI** (Tailwind)
- ✅ **Search and Filter Jobs**

🛠 Technologies Used
Laravel 10+

PHP 8.1+

Blade Templates

Alpine Js

Mapbox or Leaflet (JS)

Bootstrap/Tailwind CSS

MySQL / SQLite

Laravel Mail

Laravel Policies & Middleware

## ⚙️ Installation



```bash
1. Clone the repository
git clone https://github.com/yourusername/workglobal.git
cd workglobal
2. Install dependencies
composer install
npm install && npm run dev
3. Create .env
cp .env.example .env
php artisan key:generate
4. Run migrations and seeders
php artisan migrate --seed
5. Start the development server
php artisan serve
6. Job Application Email Setup
MAIL_MAILER=smtp
MAIL_HOST=smtp.example.com
MAIL_PORT=587
MAIL_USERNAME=your@email.com
MAIL_PASSWORD=yourpassword
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=no-reply@jobportal.com
MAIL_FROM_NAME="Job Portal"
7. Map Integration
MAPBOX_API_KEY=your_mapbox_token


