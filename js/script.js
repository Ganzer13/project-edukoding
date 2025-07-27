// script.js

// Tunggu hingga seluruh dokumen HTML selesai dimuat
document.addEventListener('DOMContentLoaded', function() {

    // Pilih elemen form dan pesan error
    const form = document.getElementById('form-pendaftaran');
    const namaInput = document.getElementById('nama');
    const emailInput = document.getElementById('email');
    const errorMessage = document.getElementById('error-message');

    // Tambahkan event listener untuk event 'submit' pada form
    form.addEventListener('submit', function(event) {
        
        // Hapus pesan error sebelumnya
        errorMessage.classList.add('d-none');
        errorMessage.textContent = '';

        // Validasi: Cek apakah nama atau email kosong
        if (namaInput.value.trim() === '' || emailInput.value.trim() === '') {
            // Mencegah form dikirim ke server
            event.preventDefault(); 
            
            // Tampilkan pesan error
            errorMessage.textContent = 'Nama dan Email wajib diisi!';
            errorMessage.classList.remove('d-none');
        }
    });
});