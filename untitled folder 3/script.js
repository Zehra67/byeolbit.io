// Example JavaScript for toggling filters
document.addEventListener('DOMContentLoaded', () => {
    const filterButtons = document.querySelectorAll('.filters button');
    filterButtons.forEach(button => {
        button.addEventListener('click', () => {
            // Add functionality to filter products
            console.log('Filter button clicked:', button.textContent);
        });
    });
});
function toggleMenu() {
    const navLinks = document.getElementById('nav-links');
    navLinks.classList.toggle('active');
}