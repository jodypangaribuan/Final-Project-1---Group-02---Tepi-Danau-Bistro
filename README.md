![Logo](public/assets/logo.png)

# Selamat Datang di Website Tepi Danau Bistro

**Gambaran Umum**
Website Tepi Danau Bistro adalah proyek akhir pertama mahasiswa Institut Teknologi Del, dirancang untuk membantu restoran yang belum memiliki kehadiran online. Website ini menyediakan berbagai informasi terkait restoran dan memungkinkan pengelolaan data oleh admin restoran.

**Fitur Utama**

-   Menampilkan menu dan informasi restoran
-   Pengelolaan konten oleh admin

**Panduan Memulai**

1. **Clone repositori**:
    ```sh
    git clone https://github.com/jodypangaribuan/FinalProject1-Group-02-TepiDanauBistro.git
    ```
2. **Pindah ke direktori proyek**:
    ```sh
    cd FinalProject1-Group-02-TepiDanauBistro
    ```
3. **Instal dependensi dengan Composer**:
    ```sh
    composer install
    ```
    - Jika terjadi kesalahan versi PHP, gunakan:
    ```sh
    composer install --ignore-platform-req=ext-gd
    ```
4. **Salin file konfigurasi**:
    ```sh
    cp .env.example .env
    ```
5. **Sesuaikan konfigurasi dalam file `.env`** untuk database, email, dll.
6. **Generate kunci aplikasi Laravel**:
    ```sh
    php artisan key:generate
    ```
7. **Jalankan migrasi database**:
    ```sh
    php artisan migrate
    ```
    - Ketik `yes` jika diminta konfirmasi.
8. **Jalankan server development**:
    ```sh
    php artisan serve
    ```
9. **Akses proyek di browser**:
   [http://localhost:8000](http://localhost:8000)

10. **Untuk melihat atau mengekspor data database**, gunakan file SQL yang tersedia di Google Drive:
    [Link ke Google Drive](https://drive.google.com/file/d/1G6qIrM94dlBD3p6HCvJVOq8zltuP_VFb/view?usp=sharing)

**Kontak**

-   **Email**: [jodypangaribuan@gmail.com](mailto:jodypangaribuan@gmail.com)
-   **GitHub**: [jodypangaribuan](https://github.com/jodypangaribuan)
