// 1. Fungsi Greeting (Menyapa pengunjung)
document.addEventListener('DOMContentLoaded', function() {
    const hours = new Date().getHours();
    let greeting;

    if (hours < 12) greeting = "Selamat Pagi!";
    else if (hours < 18) greeting = "Selamat Siang!";
    else greeting = "Selamat Malam!";

    console.log("Sistem Siap. " + greeting);
});

// 2. Interaktivitas: Alert saat klik tombol 'Kenali Saya'
function infoProyek() {
    alert("Terima kasih telah tertarik! Saya sedang mengembangkan sistem ini menggunakan Bootstrap 5.");
}

// 3. Simple Form Validation (Jika kamu menambah form kontak nanti)
const contactForm = document.querySelector('#contactForm');
if(contactForm) {
    contactForm.addEventListener('submit', function(e) {
        e.preventDefault();
        alert('Pesan Anda telah terkirim (Simulasi)!');
    });
}