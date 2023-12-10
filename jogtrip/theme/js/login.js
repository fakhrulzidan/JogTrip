document.addEventListener('DOMContentLoaded', function () {
  document.getElementById('chk').addEventListener('change', function () {
    // ...
  });
});

function validateCredentials() {
  const emailInput = document.getElementById('email');
  const passwordInput = document.getElementById('password');
  const credentialsNotification = document.getElementById('credentialsNotification');

  // Contoh validasi sederhana (ganti dengan logika validasi sesuai kebutuhan)
  if (emailInput.value === 'user@example.com' && passwordInput.value === 'password123') {
    // Pengguna berhasil login, arahkan ke halaman login
    window.location.href = '.login'; // Ganti 'halaman_login.html' dengan halaman login yang sesuai
  } else {
    // Tampilkan notifikasi jika email atau password salah
    credentialsNotification.style.display = 'block';
    setTimeout(() => {
      credentialsNotification.style.display = 'none';
    }, 3000);
  }
}