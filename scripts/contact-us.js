email = "tarlacemergencycontacts@gmail.com";

document.getElementById('contactForm').addEventListener('submit', (e) => {
    e.preventDefault();
    const subject = document.getElementById('subject').value.trim();
    const message = document.getElementById('body').value.trim();
    window.location.href = `mailto:${email}?subject=${encodeURIComponent(subject)}&body=${encodeURIComponent(message)}`;
});