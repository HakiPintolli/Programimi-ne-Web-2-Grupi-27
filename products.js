function filterProducts(category) {
    // Toggle active class for buttons
    const toggleButtons = document.querySelectorAll('.toggle-btn');
    toggleButtons.forEach(btn => {
        btn.classList.remove('active');
    });
    event.target.classList.add('active');

    // Call PHP function to filter products based on category
    fetch('filter.php?category=' + category)
        .then(response => response.text())
        .then(data => {
            document.querySelector('.box').innerHTML = data;
        })
        .catch(error => {
            console.error('Error:', error);
        });
}
