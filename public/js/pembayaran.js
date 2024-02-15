// jika form invalid dan valid
document.addEventListener('DOMContentLoaded', function() {
    const form = document.querySelector('form');
    const button = document.querySelector('button[type="submit"]');

    form.addEventListener('input', function() {
        let isValid = true;
        form.querySelectorAll('[required]').forEach(function(input) {
            if (!input.checkValidity()) {
                isValid = false;
            }
        });

        if (isValid) {
            button.classList.remove('btn-secondary');
            button.classList.add('btn-success');
            button.disabled = false;
        } else {
            button.classList.remove('btn-success');
            button.classList.add('btn-secondary');
            button.disabled = true;
        }
    });
});

// sebagai hamba allah
document.addEventListener('DOMContentLoaded', function() {
    const checkbox = document.querySelector('input[type="checkbox"]');
    const inputNamaDonatur = document.querySelector('.nama-donatur');

    checkbox.addEventListener('change', function() {
        if (checkbox.checked) {
            inputNamaDonatur.removeAttribute('required');
            inputNamaDonatur.disabled = true;
            inputNamaDonatur.value = '';
            inputNamaDonatur.placeholder = 'Anda infak sebagai hamba Allah';
        } else {
            inputNamaDonatur.setAttribute('required', true);
            inputNamaDonatur.disabled = false;
            inputNamaDonatur.placeholder = 'Masukkan Nama Donatur';
        }
    });
});



// memberikan koma pada saat mencapai angka ribuan dst
function validateAndFormat(input) {
    let value = input.value.replace(/\D/g, '');

    input.value = Number(value).toLocaleString('id-ID');

    if (parseInt(value) < 10000) {
        input.setCustomValidity('Minimal nominal yang harus anda masukan adalah 10.000');
    } else {
        input.setCustomValidity('');
    }
}


// select option
document.addEventListener('DOMContentLoaded', function() {
    const selectPaymentMethod = document.getElementById('payment-method');

    selectPaymentMethod.addEventListener('change', function() {
        const selectedOption = this.options[this.selectedIndex];

        if (selectedOption.value === "") {
            this.setCustomValidity('Pilih metode pembayaran');
        } else {
            this.setCustomValidity('');
        }
    });
});

// validasi select option
document.addEventListener('DOMContentLoaded', function() {
    const selectElement = document.getElementById('payment-method');

    // Menambahkan event listener untuk memeriksa validitas saat opsi dipilih
    selectElement.addEventListener('change', function() {
        if (this.value === '') {
            this.setCustomValidity('Pilih salah satu metode pembayaran');
        } else {
            this.setCustomValidity('');
        }
    });

    // Menetapkan validitas awal saat halaman dimuat
    if (selectElement.value === '') {
        selectElement.setCustomValidity('Pilih salah satu metode pembayaran');
    } else {
        selectElement.setCustomValidity('');
    }
});

// placeholder select option
document.addEventListener('DOMContentLoaded', function() {
    const selectElement = document.getElementById('payment-method');

    // Buat elemen option baru untuk placeholder
    const placeholderOption = document.createElement('option');
    placeholderOption.text = 'Pilih Metode Pembayaran';
    placeholderOption.value = '';
    placeholderOption.disabled = true;
    placeholderOption.selected = true;

    // Sisipkan elemen option baru di awal dropdown
    selectElement.insertBefore(placeholderOption, selectElement.firstChild);
});


// no telpon
document.addEventListener('DOMContentLoaded', function() {
    const inputNoHp = document.querySelector('.no-hp input');

    inputNoHp.addEventListener('input', function() {
        const value = this.value;
        if (value.length < 12 || !/^\d+$/.test(value)) {
            this.setCustomValidity('Masukkan nomor telepon dengan minimal 12 karakter.');
        } else {
            this.setCustomValidity('');
        }
    });
});