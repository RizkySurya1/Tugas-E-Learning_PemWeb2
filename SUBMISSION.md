# 📋 SUBMISSION - Export Excel dan PDF Feature

## Informasi Tugas

**Nama Tugas:** Fitur Export Excel dan PDF untuk Laporan Studio  
**Nama Mahasiswa:** Rizky Surya Diputra  
**NIM:** 23552011390  
**Mata Kuliah:** Pemrograman Web 2  
**Tanggal Submission:** 11 Juni 2026  
**Deadline:** 11 Juni 2026 ✅

---

## Link GitHub Repository

🔗 **Repository URL:**  
`https://github.com/RizkySurya1/Tugas-E-Learning_PemWeb2`

---

## Deskripsi Fitur

Saya telah mengimplementasikan fitur **Export Excel dan PDF** untuk Sistem Informasi Studio The Hunk dengan beberapa laporan utama:

### 1️⃣ Laporan Booking Studio
- **URL:** `http://localhost:8000/bookings`
- **Excel Export:** `/bookings/export-excel` 
- **PDF Export:** `/bookings/export-pdf`
- **Isi:** Daftar semua booking dengan pelanggan, ruang studio, tanggal, jam, status, dan total harga

### 2️⃣ Laporan Paket Layanan  
- **URL:** `http://localhost:8000/packages`
- **Excel Export:** `/packages/export-excel`
- **PDF Export:** `/packages/export-pdf`
- **Isi:** Daftar paket layanan dengan nama, deskripsi, harga, durasi, dan fasilitas yang termasuk

### 3️⃣ Daftar Ruang Studio
- **URL:** `http://localhost:8000/rooms`
- **PDF Export:** `/rooms/export-pdf`
- **Isi:** Daftar ruang studio dengan kapasitas, peralatan, harga per jam

---

## 🛠️ Teknologi yang Digunakan

### Backend & Framework
- **Laravel 13.0** - Web Framework
- **PHP 8.3** - Programming Language
- **SQLite** - Database

### Library Export
- **maatwebsite/excel** - Export ke Excel (.xlsx)
- **barryvdh/laravel-dompdf** - Export ke PDF

### Frontend
- **Bootstrap 5.3.3** - CSS Framework
- **Bootstrap Icons** - Icon Library
- **Blade Template** - Template Engine

---

## 📁 Struktur File yang Dibuat

```
✨ New Files Created:

app/Models/
├── StudioRoom.php           (Model untuk ruang studio)
├── Booking.php              (Model untuk booking)
└── ServicePackage.php       (Model untuk paket layanan)

app/Http/Controllers/
└── ReportController.php     (Controller untuk laporan & export)

app/Exports/
├── BookingsExport.php       (Export class untuk booking)
└── ServicePackagesExport.php (Export class untuk paket)

database/migrations/
├── 2026_06_11_000010_create_studio_rooms_table.php
├── 2026_06_11_000011_create_bookings_table.php
└── 2026_06_11_000012_create_service_packages_table.php

database/factories/
├── StudioRoomFactory.php
├── BookingFactory.php
└── ServicePackageFactory.php

resources/views/bookings/
├── index.blade.php          (Halaman listing booking)
└── pdf.blade.php            (Template PDF)

resources/views/packages/
├── index.blade.php          (Halaman listing paket)
└── pdf.blade.php            (Template PDF)

resources/views/rooms/
├── index.blade.php          (Halaman listing ruang)
└── pdf.blade.php            (Template PDF)

📝 Modified Files:
- routes/web.php             (Tambah route untuk laporan)
- database/seeders/DatabaseSeeder.php (Data dummy)
- resources/views/layouts/app.blade.php (Update layout)
- composer.json              (Library Excel & PDF)
```

---

## ✨ Fitur Implementasi Lengkap

### ✅ Excel Export
- Header dengan styling (warna biru, text tebal, putih)
- Auto-size kolom untuk visibilitas optimal
- Format currency untuk harga (Rp)
- Nama file dengan tanggal otomatis

### ✅ PDF Export
- Template profesional dengan header logo
- Tabel terstruktur dengan border
- Total perhitungan otomatis (khusus booking)
- Footer dengan keterangan tanggal cetak
- A4 page format

### ✅ Database
- 3 Migration untuk 3 tabel utama
- 3 Factory untuk generate data dummy
- 5 Studio Room dengan spek berbeda
- 5 Booking dengan status berbeda
- 5 Paket Layanan

### ✅ UI/UX
- Responsive design (Mobile & Desktop)
- Navigation menu dengan active state
- Pagination untuk data besar
- Bootstrap styling & icons
- Status badge dengan warna

---

## 🚀 Cara Menjalankan

### 1. Clone Repository
```bash
git clone https://github.com/RizkySurya1/Tugas-E-Learning_PemWeb2.git
cd Tugas3
```

### 2. Install Dependencies
```bash
composer install
```

### 3. Setup Environment
```bash
cp .env.example .env
php artisan key:generate
```

### 4. Database Migration & Seeding
```bash
php artisan migrate --force
php artisan db:seed
```

### 5. Run Server
```bash
php artisan serve
```

### 6. Akses Aplikasi
- Halaman Utama: `http://localhost:8000/`
- Laporan Booking: `http://localhost:8000/bookings`
- Laporan Paket: `http://localhost:8000/packages`
- Daftar Ruang: `http://localhost:8000/rooms`

---

## 📊 Contoh Output Export

### Excel File (Booking)
```
ID | Pelanggan | Ruang Studio | Tanggal Booking | Jam Mulai | Jam Selesai | Status | Harga Total
1  | Admin     | Studio A     | 12-06-2026      | 09:00:00  | 12:00:00    | confirmed | Rp 600.000,00
```

### PDF File
```
═══════════════════════════════════════════════════════
🎸 STUDIO THE HUNK
Laporan Booking Studio
Tanggal Cetak: 11-06-2026 14:30:45
═══════════════════════════════════════════════════════
[Table dengan data lengkap]
Total Pendapatan: Rp 4.140.000,00
═══════════════════════════════════════════════════════
```

---

## 🎯 Checklist Completion

- ✅ Fitur export Excel untuk Booking
- ✅ Fitur export PDF untuk Booking
- ✅ Fitur export Excel untuk Paket Layanan
- ✅ Fitur export PDF untuk Paket Layanan
- ✅ Fitur export PDF untuk Ruang Studio
- ✅ Database Migration & Seeding
- ✅ Repository ter-push ke GitHub
- ✅ README documentation lengkap
- ✅ Tema sesuai (Studio Musik)
- ✅ Responsive Design
- ✅ Professional UI/UX

---

## 📝 Catatan Tambahan

1. **Data Dummy:** Project sudah menyertakan data dummy yang otomatis di-seed
2. **Error Handling:** Setiap endpoint sudah handle error dengan baik
3. **Styling:** Menggunakan Bootstrap 5 untuk konsistensi
4. **Performance:** Query teroptimasi dengan eager loading
5. **Security:** Input validation sudah diterapkan

---

## 🔗 Live Links

| Feature | URL |
|---------|-----|
| Booking Report | `/bookings` |
| Booking Excel | `/bookings/export-excel` |
| Booking PDF | `/bookings/export-pdf` |
| Paket Report | `/packages` |
| Paket Excel | `/packages/export-excel` |
| Paket PDF | `/packages/export-pdf` |
| Ruang Report | `/rooms` |
| Ruang PDF | `/rooms/export-pdf` |

---

## 📧 Contact & Informasi

**Nama:** Rizky Surya Diputra  
**NIM:** 23552011390  
**GitHub:** https://github.com/RizkySurya1  
**Repository:** https://github.com/RizkySurya1/Tugas-E-Learning_PemWeb2  

---

## 📅 Timeline

| Tanggal | Aktivitas |
|---------|-----------|
| 11-06-2026 | Membuat Model dan Migration |
| 11-06-2026 | Membuat Export Classes dan Controller |
| 11-06-2026 | Membuat Views dan Routes |
| 11-06-2026 | Database Seeding |
| 11-06-2026 | Push ke GitHub |
| 11-06-2026 | Submission ✅ |

---

**Status:** ✅ COMPLETED - Semua fitur telah diimplementasikan dan di-test  
**Submission Date:** 11 Juni 2026  
**Deadline:** 11 Juni 2026 ✅ TEPAT WAKTU
