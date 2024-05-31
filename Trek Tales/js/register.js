document.getElementById('form').addEventListener('submit', function(event) {
    let pass = document.getElementById('password').value;
    let repass = document.getElementById('repassword').value;

    const matched = pass.localeCompare(repass)
    
    if (matched!=0) {
        alert('Re Password not matched.');
        event.preventDefault();
        return;
    }
    alert('Registration Successfully!!\nYou will be redirected to Home page.');
});
