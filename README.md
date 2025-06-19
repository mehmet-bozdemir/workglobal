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
- ✅ **Responsive UI** (Bootstrap/Tailwind ready)
- ✅ **Search and Filter Jobs**

## ⚙️ Installation



```bash
### 1. Clone the repository
git clone https://github.com/yourusername/laravel-job-portal.git
cd laravel-job-portal
### 2. Install dependencies
composer install
npm install && npm run dev
### 3. Create .env
cp .env.example .env
php artisan key:generate
### 4. Run migrations and seeders
php artisan migrate --seed
### 5. Start the development server
php artisan serve


