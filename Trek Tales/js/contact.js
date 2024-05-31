document.getElementById('contact').addEventListener('submit', function(event) {
    let email = document.getElementById('email').value.trim();
    let number = document.getElementById('number').value.trim();
    
    if (number.length < 10) {
        alert('Invalid Contact Number.');
        event.preventDefault();
        return;
    }

    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailRegex.test(email)) {
        alert('Invalid email format.');
        event.preventDefault();
        return;
    }
    alert('Thank You! for contacting us.\n We will reach you soon.');
});
