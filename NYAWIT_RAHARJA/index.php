<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nyawit Raharja - Portofolio Sawit Berkelanjutan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <nav class="navbar navbar-expand-lg sticky-top">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#">RAHARJA SAWIT</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#beranda">Beranda</a></li>
                    <li class="nav-item"><a class="nav-link" href="#tentang">Tentang</a></li>
                    <li class="nav-item"><a class="nav-link" href="#hasil">Hasil Kebun</a></li>
                    <li class="nav-item"><a class="nav-link" href="#kontak">Hubungi Kami</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <header id="beranda" class="hero-section text-center">
        <div class="container">
            <h1 class="display-2 fw-bold">Nyawit Raharja</h1>
            <p class="lead fs-4">Mendedikasikan Hidup untuk Kelapa Sawit yang Berkelanjutan.</p>
            <button class="btn btn-custom mt-3 fs-5" onclick="tampilPesan()">Kenali Saya Lebih Dekat</button>
        </div>
    </header>

    <section id="tentang">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-5 text-center mb-4 mb-md-0">
                    <img src="https://images.unsplash.com/photo-1542601906990-b4d3fb778b09?w=400" alt="Petani Sawit" class="img-fluid about-img shadow">
                </div>
                <div class="col-md-7">
                    <h2 class="section-title text-start">Siapa Nyawit Raharja?</h2>
                    <p class="fs-5 text-muted">Saya adalah petani kelapa sawit generasi kedua yang berfokus pada teknik pertanian ramah lingkungan. Dengan pengalaman lebih dari 20 tahun di Sumatera, saya percaya bahwa sawit berkualitas bisa sejalan dengan kelestarian alam.</p>
                    <div class="row text-center mt-4">
                        <div class="col-4"><h3>50+</h3><p>Hektar Lahan</p></div>
                        <div class="col-4"><h3>100%</h3><p>Organik Parsial</p></div>
                        <div class="col-4"><h3>ISPO</h3><p>Sertifikasi</p></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="hasil" class="bg-light">
        <div class="container">
            <h2 class="section-title">Hasil Kebun Utama</h2>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card card-hasil shadow-sm h-100">
                        <img src="https://via.placeholder.com/300x200?text=Tandan+Buah+Segar" class="card-img-top" alt="TBS">
                        <div class="card-body">
                            <h5 class="card-title text-success">Tandan Buah Segar (TBS)</h5>
                            <p class="card-text text-muted">Dipanen setiap hari dengan tingkat kematangan sempurna untuk rendemen minyak tinggi.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card card-hasil shadow-sm h-100">
                        <img src="https://via.placeholder.com/300x200?text=Minyak+Sawit+Mentah" class="card-img-top" alt="CPO">
                        <div class="card-body">
                            <h5 class="card-title text-success">CPO Berkualitas</h5>
                            <p class="card-text text-muted">Minyak sawit mentah dengan kadar asam lemak bebas rendah, siap untuk diolah.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card card-hasil shadow-sm h-100">
                        <img src="https://via.placeholder.com/300x200?text=Inti+Sawit" class="card-img-top" alt="Kernel">
                        <div class="card-body">
                            <h5 class="card-title text-success">Inti Sawit (Kernel)</h5>
                            <p class="card-text text-muted">Produk sampingan berkualitas tinggi untuk industri pakan ternak dan kosmetik.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="kontak">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-9 col-lg-7">
                    <div class="contact-box shadow">
                        <h2 class="section-title mb-4">Hubungi Nyawit</h2>
                        <form id="formKontak">
                            <div class="mb-3">
                                <label class="form-label fw-bold">Nama Lengkap</label>
                                <input type="text" class="form-control" placeholder="Masukkan nama Anda" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label fw-bold">Pesan / Kerjasama</label>
                                <textarea class="form-control" rows="4" placeholder="Apa yang bisa saya bantu?" required></textarea>
                            </div>
                            <button type="submit" class="btn btn-custom w-100 fs-5">Kirim Pesan Sekarang</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="py-5 text-center">
        <div class="container">
            <p class="mb-2 fs-5">&copy; <?php echo date("Y"); ?> Portofolio Nyawit Raharja. Semua Hak Dilindungi.</p>
            <p class="small opacity-75">Dibuat dengan semangat memajukan pertanian Indonesia.</p>
            <hr class="w-25 mx-auto border-secondary my-4">
            <a href="terms.php" class="text-warning text-decoration-none small">Ketentuan Penggunaan (Terms of Use)</a>
        </div>
    </footer>

    <script>
    // 1. Fungsi Sapaan Dasar
    function tampilPesan() {
        alert("Terima kasih! Silakan telusuri halaman ini untuk melihat hasil kebun kami.");
    }

    // 2. Interaktivitas Hover pada Card menggunakan JavaScript
    // Kita ambil semua elemen yang punya class 'card-hasil'
    const cards = document.querySelectorAll('.card-hasil');

    cards.forEach(card => {
        // Saat kursor masuk (Mouse Over)
        card.onmouseover = function() {
            this.style.transform = "scale(1.05)"; // Sedikit membesar
            this.style.boxShadow = "0 10px 30px rgba(27, 67, 50, 0.3)"; // Bayangan hijau
            this.style.transition = "0.3s";
        };

        // Saat kursor keluar (Mouse Out)
        card.onmouseout = function() {
            this.style.transform = "scale(1)"; // Kembali normal
            this.style.boxShadow = "none"; // Bayangan hilang
        };
    });

    // 3. Interaktivitas Form Kontak
    document.getElementById('formKontak').addEventListener('submit', function(event) {
        event.preventDefault();
        alert("Pesan Anda telah terkirim (Simulasi). Kami akan segera menghubungi Anda.");
        this.reset();
    });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>