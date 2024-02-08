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
        if (this.checked) {
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