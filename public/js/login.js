document.getElementById('checkbox').addEventListener('change', function () {
    var passwordInput = document.getElementById('password');
    if (this.checked) {
        passwordInput.type = 'text';
    } else {
        passwordInput.type = 'password';
        console.log('ok')
    }
});
