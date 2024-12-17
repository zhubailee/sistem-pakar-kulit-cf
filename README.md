# Sistem Pakar Penyakit Kulit

Aplikasi Sistem Pakar Penyakit Kulit ini dibangun menggunakan metode Certainty Factor pada framework Laravel 9. Aplikasi ini membantu pengguna untuk mendiagnosis penyakit kulit berdasarkan gejala-gejala yang dimasukkan.

## Fitur
- Input gejala-gejala penyakit kulit.
- Diagnosa penyakit kulit berdasarkan gejala.
- Menampilkan tingkat kepastian (certainty factor) dari diagnosa.

## Instalasi
1. Clone repository ini:
    ```bash
    git clone https://github.com/username/repo-name.git
    ```
2. Masuk ke direktori project:
    ```bash
    cd repo-name
    ```
3. Install dependencies menggunakan Composer:
    ```bash
    composer install
    ```
4. Copy `.env.example` menjadi `.env` dan sesuaikan pengaturan database:
    ```bash
    cp .env.example .env
    ```
5. Generate application key:
    ```bash
    php artisan key:generate
    ```
6. Jalankan migrasi database:
    ```bash
    php artisan migrate
    ```
7. Jalankan aplikasi:
    ```bash
    php artisan serve
    ```

## Penggunaan
1. Buka browser dan akses `http://localhost:8000`.
2. Input gejala-gejala yang dialami pada form yang tersedia.
3. Klik tombol "Diagnosa" untuk mendapatkan hasil diagnosa penyakit kulit beserta tingkat kepastian (certainty factor).

## Kontribusi
Jika Anda ingin berkontribusi pada proyek ini, silakan buat pull request atau hubungi kami melalui [Instagram](https://www.instagram.com/yoho_hohooooo) atau [Saweria](https://saweria.co/zhubailee).

## Lisensi
Aplikasi ini dilisensikan di bawah [Nama Lisensi Anda]. Lihat file [LICENSE](LICENSE) untuk informasi lebih lanjut.

---

Terima kasih telah menggunakan aplikasi Sistem Pakar Penyakit Kulit ini! Jangan ragu untuk menghubungi kami jika ada pertanyaan atau masukan.
