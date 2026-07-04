<div align="center">

# 🇯🇵 LPK Seikou Japan

**Sistem Informasi & Manajemen Lembaga Pelatihan Kerja Seikou Japan**

Platform berbasis web untuk mengelola pendaftaran, pelatihan, dan penempatan kerja peserta program magang & SSW ke Jepang.

![Laravel](https://img.shields.io/badge/Laravel-12-FF2D20?style=flat&logo=laravel&logoColor=white)
![PHP](https://img.shields.io/badge/PHP-8.2%2B-777BB4?style=flat&logo=php&logoColor=white)
![Bootstrap](https://img.shields.io/badge/Bootstrap-5-7952B3?style=flat&logo=bootstrap&logoColor=white)
![TailwindCSS](https://img.shields.io/badge/TailwindCSS-3-06B6D4?style=flat&logo=tailwindcss&logoColor=white)
![License](https://img.shields.io/badge/license-MIT-blue.svg)

</div>

---

## 📖 Tentang Project

**LPK Seikou Japan** adalah aplikasi web yang dibangun menggunakan **Laravel** untuk mendukung operasional Lembaga Pelatihan Kerja (LPK) yang mempersiapkan tenaga kerja Indonesia menuju program magang (*Ginou Jisshuu*) dan pekerja berketerampilan spesifik (*Tokutei Ginou / SSW*) di Jepang.

Sistem ini mencakup situs profil publik (informasi program, artikel, galeri, kontak) sekaligus panel manajemen internal untuk tiga peran pengguna: **Admin**, **Guru/Sensei**, dan **Siswa**.

## ✨ Fitur Utama

### 🌐 Halaman Publik
- Beranda, Visi & Misi, Profil Lembaga, Tim, Grup Perusahaan
- Daftar Program Pelatihan (Magang Manufaktur, Magang Konstruksi, SSW Kaigo, SSW Food Service, Kursus Bahasa Jepang N5–N4 & N3–N2)
- Artikel & Galeri kegiatan
- Formulir Pendaftaran online (multi-step) dengan upload dokumen (foto, ijazah, KTP, KK)
- Cek status pendaftaran menggunakan kode unik

### 🔑 Autentikasi & Role
- Login dengan sistem role: `admin`, `guru`, `siswa`
- Redirect otomatis ke dashboard sesuai peran pengguna

### 🛠️ Panel Admin
- Dashboard statistik pendaftar (grafik status, jenis kelamin, tren bulanan, top asal sekolah)
- Kelola data pendaftar & update status (proses → cek kesehatan → lulus/tidak lulus)
- Pembuatan akun siswa otomatis saat pendaftar dinyatakan **lulus**
- Kelola jadwal cek kesehatan (MCU)
- Kelola akun Guru/Sensei
- Kelola Artikel & Galeri

### 👨‍🏫 Panel Guru
- Dashboard ringkasan materi
- Upload & kelola materi pembelajaran (PDF, video, dokumen)

### 🎓 Panel Siswa
- Dashboard siswa
- Lihat jadwal pelatihan
- Akses & unduh materi pembelajaran
- Profil siswa

## 🧰 Tech Stack

| Kategori   | Teknologi                          |
|------------|-------------------------------------|
| Backend    | Laravel (PHP)                       |
| Frontend   | Blade, Bootstrap 5, TailwindCSS     |
| Database   | MySQL / SQLite                      |
| Auth       | Laravel Session Auth (role-based)   |
| Charts     | Chart.js                            |
| Icons      | Bootstrap Icons, Font Awesome       |

## 🚀 Instalasi & Menjalankan Secara Lokal

### Prasyarat
- PHP >= 8.2
- Composer
- Node.js & NPM
- MySQL / SQLite

### Langkah-langkah

```bash
# 1. Clone repository
git clone https://github.com/username/lpk-seikou.git
cd lpk-seikou

# 2. Install dependency PHP
composer install

# 3. Install dependency frontend
npm install

# 4. Salin file environment
cp .env.example .env

# 5. Generate application key
php artisan key:generate

# 6. Konfigurasi database di file .env
# DB_CONNECTION=mysql
# DB_DATABASE=lpkseikou
# DB_USERNAME=root
# DB_PASSWORD=

# 7. Jalankan migrasi database
php artisan migrate

# 8. (Opsional) Jalankan seeder
php artisan db:seed

# 9. Buat symbolic link storage (untuk upload file)
php artisan storage:link

# 10. Build asset frontend
npm run dev

# 11. Jalankan server lokal
php artisan serve
```

Aplikasi dapat diakses melalui `http://127.0.0.1:8000`.

## 📁 Struktur Direktori Penting

```
app/Http/Controllers/       # Controller untuk publik, admin, guru, siswa
app/Models/                 # Model Eloquent (User, Pendaftaran, Materi, Artikel, dll)
database/migrations/        # Skema database
resources/views/            # Blade templates
    ├── admin/              # Panel admin
    ├── guru/               # Panel guru
    ├── siswa/              # Panel siswa
    ├── content/             # Halaman publik
    └── layouts/            # Layout utama & komponen bersama
```

## 👥 Role Pengguna

| Role    | Akses                                              |
|---------|-----------------------------------------------------|
| `admin` | Kelola pendaftar, jadwal, guru, artikel, galeri     |
| `guru`  | Kelola materi pembelajaran                          |
| `siswa` | Lihat jadwal & materi, kelola profil                |

## 🤝 Kontribusi

Kontribusi sangat terbuka! Silakan buat *pull request* atau ajukan *issue* untuk perbaikan bug, fitur baru, maupun peningkatan dokumentasi.

1. Fork repository ini
2. Buat branch baru (`git checkout -b fitur-baru`)
3. Commit perubahan (`git commit -m "Menambahkan fitur baru"`)
4. Push ke branch (`git push origin fitur-baru`)
5. Buat Pull Request

## 📄 Lisensi

Project ini menggunakan lisensi [MIT](https://opensource.org/licenses/MIT).

---

<div align="center">

Dibangun dengan ❤️ menggunakan [Laravel](https://laravel.com)

</div>