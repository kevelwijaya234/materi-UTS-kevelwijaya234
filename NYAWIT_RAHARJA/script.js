// 1. Set Tahun Otomatis di Footer
document.addEventListener("DOMContentLoaded", function () {
  const tahun = new Date().getFullYear();
  const elemenTahun = document.getElementById("tahunFooter");
  if (elemenTahun) elemenTahun.innerText = tahun;
});

// 2. Fungsi Tombol Hero
function tampilPesan() {
  alert("Selamat datang! Mari membangun masa depan sawit yang lebih hijau.");
}

// 3. Validasi Form Kontak (Email @gmail.com)
const form = document.getElementById("formKontak");
if (form) {
  form.addEventListener("submit", function (event) {
    event.preventDefault();

    const emailInput = document.getElementById("emailInput");
    const emailError = document.getElementById("emailError");
    const emailValue = emailInput.value;

    // Regex untuk validasi akhiran @gmail.com
    const gmailPattern = /^[a-zA-Z0-9._%+-]+@gmail\.com$/;

    if (!gmailPattern.test(emailValue)) {
      emailError.style.display = "block";
      emailInput.classList.add("is-invalid");
      emailInput.focus();
    } else {
      emailError.style.display = "none";
      emailInput.classList.remove("is-invalid");
      emailInput.classList.add("is-valid");

      alert("Terima kasih! Pesan Anda telah terkirim. Kami akan menghubungi Anda melalui " + emailValue);
      this.reset();

      // Reset status visual setelah 3 detik
      setTimeout(() => {
        emailInput.classList.remove("is-valid");
      }, 3000);
    }
  });
}
