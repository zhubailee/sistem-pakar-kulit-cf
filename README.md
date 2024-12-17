# Sistem Pakar Penyakit Kulit

Aplikasi Sistem Pakar Penyakit Kulit ini dibangun menggunakan metode Certainty Factor pada framework Laravel 9. Aplikasi ini membantu pengguna untuk mendiagnosis penyakit kulit berdasarkan gejala-gejala yang dimasukkan.

## Fitur
- Input gejala-gejala penyakit kulit.
- Diagnosa penyakit kulit berdasarkan gejala.
- Menampilkan tingkat kepastian (certainty factor) dari diagnosa.

## Instalasi
1. Clone repository ini:
    ```bash
    git clone https://github.com/zhubailee/sistem-pakar-kulit-cf
    ```
2. Masuk ke direktori project:
    ```bash
    cd sistem-pakar-kulit-cf
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
Aplikasi ini dilisensikan di bawah Apache-2.0. Lihat file [LICENSE](LICENSE) untuk informasi lebih lanjut.

---

Terima kasih telah menggunakan aplikasi Sistem Pakar Penyakit Kulit ini! Jangan ragu untuk menghubungi kami jika ada pertanyaan atau masukan.


berikut tampilannya:
## Halaman Home
![Screenshot 2024-12-17 141013](https://github.com/user-attachments/assets/75800e3b-98a7-4dd7-81a2-a84ad927bf3f)

## Admin
![Screenshot 2024-12-17 141118](https://github.com/user-attachments/assets/4e19ae31-375b-490d-80c5-55897c0042f0)

## User
![Screenshot 2024-12-17 141219](https://github.com/user-attachments/assets/95161961-8003-4ce8-98dd-617c620af275)

