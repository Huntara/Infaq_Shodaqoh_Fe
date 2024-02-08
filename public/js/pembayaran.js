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

    const savedValue = localStorage.getItem('namaDonatur');
    if (savedValue) {
        inputNamaDonatur.value = savedValue;
    }

    inputNamaDonatur.addEventListener('input', function() {
        localStorage.setItem('namaDonatur', this.value);
    });

    checkbox.addEventListener('change', function() {
        if (this.checked) {
            localStorage.setItem('namaDonatur', inputNamaDonatur.value);
            inputNamaDonatur.removeAttribute('required');
            inputNamaDonatur.disabled = true;
            inputNamaDonatur.value = 'Anda infak sebagai hamba Allah';
        } else {
            const previousValue = localStorage.getItem('namaDonatur');
            if (previousValue) {
                inputNamaDonatur.value = previousValue;
                inputNamaDonatur.setAttribute('required', true);
                inputNamaDonatur.disabled = false;
                inputNamaDonatur.placeholder = 'Masukkan Nama Donatur';
            }
        }
    });
});

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