---
````markdown
---
# Auth API - Laravel 11

Proyek ini adalah implementasi **RESTful API sederhana** untuk autentikasi pengguna, dibangun dengan **Laravel 11**. Dilengkapi dengan **JWT Authentication** dan dokumentasi API otomatis menggunakan **Swagger (l5-swagger)**, API ini dirancang untuk mudah diintegrasikan.

---

## 🚀 Fitur Utama

* **🔐 Autentikasi Lengkap:** Registrasi & Login pengguna menggunakan **JWT**.
* **🔑 Manajemen Sesi:** Fitur Logout & Token Invalidation untuk keamanan sesi.
* **👤 Profil Pengguna:** Endpoint untuk mengambil data profil pengguna yang sedang login.
* **📘 Dokumentasi Otomatis:** Integrasi **Swagger UI** untuk eksplorasi dan pengujian API yang mudah.
* **✅ Penanganan Error:** Validasi error yang jelas untuk token tidak valid atau kadaluarsa.
* **🌐 Dibangun dengan Laravel 11:** Memanfaatkan fitur terbaru dari framework Laravel.

---

## 🛠️ Instalasi Cepat

Ikuti langkah-langkah di bawah ini untuk menjalankan proyek secara lokal:

1.  **Clone Repositori:**

    ```bash
    git clone https://github.com/ilhamsptra20/auth_api.git
    cd auth-api
    ```

2.  **Instal Dependensi:**

    ```bash
    composer install
    ```

3.  **Konfigurasi Environment:**
    Salin file `.env.example` dan buat kunci aplikasi serta kunci JWT:

    ```bash
    cp .env.example .env
    php artisan key:generate
    php artisan jwt:secret
    ```

4.  **Konfigurasi Database:**
    Buka file `.env` dan sesuaikan detail koneksi database Anda:

    ```
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=auth_api
    DB_USERNAME=root
    DB_PASSWORD=
    ```

5.  **Jalankan Migrasi Database:**

    ```bash
    php artisan migrate
    ```

6.  **Jalankan Server Lokal:**

    ```bash
    php artisan serve
    ```

---

## 📑 Dokumentasi API (Swagger)

Akses dokumentasi Swagger UI setelah server berjalan di:

````

http://localhost:8000/api/documentation

````

Jika Anda melakukan perubahan pada anotasi Swagger, regenerasi dokumentasi dengan perintah:

```bash
php artisan l5-swagger:generate
````

-----

## 🔐 Endpoint API

Berikut adalah daftar endpoint utama yang tersedia:

| Method | Endpoint        | Deskripsi                       | Middleware |
| :----- | :-------------- | :------------------------------ | :--------- |
| `POST` | `/api/register` | Registrasi pengguna baru.       | -          |
| `POST` | `/api/login`    | Login pengguna dan dapatkan token JWT. | -          |
| `POST` | `/api/logout`   | Logout pengguna dan batalkan token. | `auth:api` |
| `GET`  | `/api/profile`  | Ambil detail profil pengguna yang sedang login. | `auth:api` |

-----

## 🧰 Teknologi yang Digunakan

  * **Laravel 11:** Framework PHP.
  * [**tymon/jwt-auth**](https://github.com/tymondesigns/jwt-auth): Library untuk autentikasi JWT.
  * [**l5-swagger**](https://github.com/DarkaOnLine/L5-Swagger): Integrasi Swagger untuk Laravel.
  * **PHP 8+**

-----

## 📌 Catatan Penting

  * Untuk endpoint yang memerlukan autentikasi (`auth:api`), pastikan untuk menyertakan token JWT pada header `Authorization` dengan format:
    ```
    Authorization: Bearer <token_jwt_anda>
    ```
  * Jika token yang dikirim tidak valid atau sudah kadaluarsa, API akan mengembalikan respons error dalam format JSON.

-----

## 👤 Tentang Pengembang

**Muhamad Ilham Saputra**
📧 [muhamadilhamsptra@gmail.com](mailto:muhamadilhamsptra@gmail.com)

-----
Terima Kasih Semoga Memuaskan 