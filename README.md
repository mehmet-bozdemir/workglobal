# 🧑‍💼 WorkGlobal – Laravel Job Portal

A modern, full-featured **job portal** built with Laravel where users can **post vacancies** or **apply for jobs**. This application includes **robust authentication**, **role-based access**, **interactive job maps**, and **email notifications** — making it a complete solution for hiring and job hunting.

---

## 🚀 Features

## 🚀 TALL STACK

- ✅ **Authentication** – Login, Register
- ✅ **Job Management (CRUD)** – Post, Edit, Delete jobs
- ✅ **Job Applications** – With optional email notifications
- ✅ **Bookmarking** – Save jobs for later
- ✅ **Profile & Dashboard** – Personalized user interface
- ✅ **Interactive Maps** – Mapbox or Leaflet for job locations
- ✅ **Secure Routes** – Middleware and Policies
- ✅ **Reusable Blade Components**
- ✅ **Alpine Js**
- ✅ **Responsive UI** – Built with Tailwind CSS
- ✅ **Search & Filtering** – Find relevant opportunities fast

---

## 🛠 Tech Stack

| Layer         | Tools & Frameworks                   |
|--------------|--------------------------------------|
| **Backend**   | Laravel 10+, PHP 8.1+                |
| **Frontend**  | Blade Templates, Alpine.js, Tailwind |
| **Database**  | MySQL                                |
| **Email**     | Mailtrap (SMTP)                      |
| **Maps**      | Mapbox / Leaflet                     |
| **Security**  | Laravel Policies & Middleware        |

---

## ⚙️ Installation Guide


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
MAIL_FROM_ADDRESS=no-reply@workglobal.com
MAIL_FROM_NAME="Workglobal"
7. Map Integration
MAPBOX_API_KEY=your_mapbox_token
```
## Home page
<p align="center"> <img src="public/images/home-page.png"></p>

## Dashboard
<p align="center"> <img src="public/images/dashboard.png"></p>

## Create job listings
<p align="center"> <img src="public/images/create-job-listing.png"></p>

## Saved jobs
<p align="center"> <img src="public/images/saved-jobs.png"></p>

## Locator
<p align="center"> <img src="public/images/locator.png"></p>
