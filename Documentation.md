# DOCUMENTATION  
## Website Company Profile Coffee Shop Berbasis Web  

---

## 1. Latar Belakang Dokumentasi
Dokumentasi ini disusun untuk menjelaskan proses perancangan Studi Literatur Review (SLR), Business Requirements Document (BRD), serta implementasi teknis Application Programming Interface (API) pada pengembangan website company profile coffee shop berbasis web. Seluruh tahapan disusun secara sistematis agar terdapat kesinambungan antara kajian teori, kebutuhan bisnis, dan implementasi program yang dikembangkan.

---

## 2. Perancangan SLR Menggunakan Pendekatan PICOS
Pendekatan PICOS digunakan sebagai dasar dalam merancang Studi Literatur Review (SLR) agar fokus penelitian jelas dan konsisten dengan tujuan pengembangan sistem. PICOS membantu mengidentifikasi ruang lingkup penelitian berdasarkan platform, intervensi teknologi, perbandingan kondisi, hasil yang diharapkan, serta konteks studi.

Berdasarkan hasil evaluasi dan penyesuaian dengan website COFFO, konsep PICOS yang digunakan adalah sebagai berikut:

- **Rumpun Ilmu**: Software Engineering  
- **Deskripsi**: Pengembangan website company profile coffee shop berbasis web  
- **P (Platform)**: Website company profile untuk penyajian informasi, produk kopi, blog, dan kontak  
- **I (Intervention)**: Penerapan teknologi web berbasis Laravel untuk membangun website yang informatif, responsif, dan mudah dikelola  
- **C (Comparison)**: Coffee shop belum memiliki website resmi dan masih mengandalkan media promosi manual atau media sosial  
- **O (Outcome)**: Website company profile yang memudahkan pengunjung mengakses informasi serta membantu admin dalam pengelolaan konten  
- **S (Suspect)**: Website meningkatkan penyampaian informasi dan citra profesional coffee shop  

Konsep PICOS ini menjadi landasan utama dalam penyusunan SLR serta memastikan keterkaitan antara teori yang dikaji dan sistem yang dikembangkan.

---

## 3. Perumusan Research Question (RQ)
Berdasarkan konsep PICOS dan hasil diskusi, ditetapkan research question utama sebagai berikut:

**RQ:**  
*Bagaimana peran website company profile berbasis web dalam meningkatkan penyampaian informasi dan citra profesional coffee shop?*

Research question ini dipilih karena selaras dengan tujuan penelitian, relevan dengan fitur website COFFO, serta tidak melibatkan proses transaksi atau sistem operasional.

---

## 4. Perancangan Studi Literatur Review (SLR)
SLR disusun untuk menjawab research question secara teoritis dengan membahas konsep website company profile, peran desain antarmuka dan user experience, serta website sebagai media branding coffee shop. Pembahasan ini bertujuan untuk menunjukkan hubungan antara kualitas website, efektivitas penyampaian informasi, dan pembentukan citra profesional coffee shop.

Hasil SLR digunakan sebagai landasan teoritis dalam menentukan kebutuhan bisnis dan sistem pada tahap perancangan BRD.

---

## 5. Perancangan Business Requirements Document (BRD)

### 5.1 Evaluasi BRD Awal
BRD awal masih berfokus pada sistem dashboard order coffee shop yang mencakup proses pemesanan, kasir, dan laporan penjualan. Konsep tersebut dinilai tidak sesuai dengan fokus SLR dan implementasi website COFFO yang bersifat company profile.

---

### 5.2 Revisi dan Penyesuaian BRD
BRD direvisi dengan prinsip bahwa dokumen tersebut harus menjadi turunan langsung dari SLR dan research question. Fokus BRD diarahkan pada kebutuhan bisnis dalam penyampaian informasi dan pembentukan citra profesional coffee shop melalui website.

BRD hasil revisi mencakup kebutuhan penyediaan informasi profil usaha, produk kopi, blog atau artikel, informasi kontak, serta pengelolaan konten oleh admin website, tanpa memasukkan fitur transaksi atau operasional.

---

### 5.3 Sinkronisasi SLR dan BRD
Hubungan antara SLR dan BRD dapat diringkas sebagai berikut:
- SLR berfungsi sebagai landasan teoritis  
- Research question menjadi penghubung antara teori dan kebutuhan sistem  
- BRD menjadi turunan kebutuhan bisnis dan sistem dari SLR  

Dengan demikian, SLR dan BRD dinyatakan sinkron secara konseptual dan implementatif.

---

## 6. Kesimpulan Dokumentasi SLR dan BRD
Dokumentasi ini menunjukkan bahwa perancangan SLR dan BRD dilakukan secara terstruktur dan konsisten, dimulai dari pendekatan PICOS, perumusan research question, hingga penurunan kebutuhan bisnis dalam BRD. Seluruh dokumen telah disesuaikan dengan website company profile coffee shop yang dikembangkan, sehingga menghasilkan dokumen yang rapi, sinkron, dan dapat dipertanggungjawabkan secara akademik.

---

## 7. Implementasi Teknis API pada Program

Setelah kebutuhan sistem ditetapkan melalui SLR dan BRD, tahap selanjutnya adalah implementasi teknis berupa Application Programming Interface (API). API digunakan sebagai penghubung antara data dan antarmuka pengguna untuk menyajikan informasi secara terstruktur sesuai dengan kebutuhan website company profile.

---

## 8. Menjalankan Environment Pengembangan

Sebelum proses pembuatan API dilakukan, environment pengembangan dijalankan menggunakan Docker.

```bash
dcu
```

## 9. Inisialisasi dan Persiapan Database

Setelah environment aktif, database dipersiapkan agar struktur tabel dan data awal sesuai dengan kebutuhan sistem. Proses ini dilakukan dengan menjalankan command berikut:

```bash
dci
```

Command dci berfungsi untuk menjalankan proses migrasi database secara fresh sekaligus mengeksekusi seluruh seeder yang tersedia, sehingga database berada dalam kondisi awal yang bersih dan siap digunakan.

## 10. Pembuatan Migration dan Seeder

Tahap selanjutnya adalah pembuatan struktur tabel database beserta data awal untuk setiap entitas yang digunakan pada sistem. Pembuatan migration dan seeder dilakukan menggunakan command berikut:

```bash
dcm Article
dcm Product
dcm Profile
dcm ContactMessage
```

Command dcm digunakan untuk menghasilkan file migration yang mendefinisikan struktur tabel serta file seeder untuk pengisian data awal sesuai dengan kebutuhan website company profile coffee shop.

## 11. Pembuatan Model

Model dibuat sebagai representasi dari tabel database yang telah didefinisikan pada tahap migration. Model berfungsi sebagai penghubung antara database dan API dalam proses pengambilan maupun penyimpanan data.

```
dcr Article
dcr Product
dcr Profile
dcr ContactMessage
```


Model yang dihasilkan kemudian dikonfigurasi dengan properti fillable agar data dapat diolah secara aman dan sesuai dengan kebutuhan sistem.

## 12. Pembuatan API Controller

Controller API dibuat untuk menangani request HTTP yang masuk dan mengelola logika aplikasi sebelum data dikembalikan dalam format JSON.

```
dca make:controller ArticleController
dca make:controller ProductController
dca make:controller ProfileController
dca make:controller ContactMessageController
```

Setiap controller memiliki tanggung jawab yang spesifik sesuai dengan entitas yang dikelola, seperti pengambilan data menggunakan metode GET dan penyimpanan data menggunakan metode POST.

## 13. Konfigurasi Routing API

Routing API didefinisikan pada file routes/api.php. Routing ini berfungsi untuk memetakan endpoint API ke controller yang sesuai serta menentukan metode HTTP yang digunakan.

Pemisahan routing API dan routing web dilakukan untuk menjaga struktur aplikasi tetap rapi dan memudahkan pengelolaan endpoint.

## 14. Pengujian API

Setelah seluruh komponen API selesai dibuat, dilakukan pengujian untuk memastikan setiap endpoint dapat diakses dan berfungsi sesuai dengan kebutuhan sistem. Pengujian mencakup:

Pengujian endpoint GET untuk pengambilan data

Pengujian endpoint POST untuk pengiriman data form kontak

Pengujian validasi input untuk memastikan keamanan data

Hasil pengujian menunjukkan bahwa API berjalan dengan baik dan memberikan response yang konsisten.

## 15. Keterkaitan Implementasi API dengan SLR dan BRD

Implementasi API merupakan realisasi teknis dari hasil SLR dan BRD yang telah disusun sebelumnya. Setiap endpoint API dirancang untuk mendukung kebutuhan bisnis, khususnya dalam penyampaian informasi dan pembentukan citra profesional coffee shop.

Dengan demikian, implementasi API, SLR, dan BRD membentuk satu kesatuan yang saling berkesinambungan dari sisi teori, kebutuhan bisnis, hingga implementasi sistem.

## 16. Kesimpulan Akhir

Berdasarkan seluruh tahapan yang telah dilakukan, dapat disimpulkan bahwa implementasi API pada website company profile coffee shop berbasis web telah dilakukan secara terstruktur dan sesuai dengan kebutuhan sistem. Proses dimulai dari persiapan environment, pengelolaan database, hingga pengujian API.

Pendekatan ini memastikan bahwa sistem yang dikembangkan memiliki dasar akademik yang jelas, memenuhi kebutuhan bisnis, serta dapat diimplementasikan secara teknis dengan baik.


---
