let currentIndex = 0;

function moveCarousel(direction) {
    const container = document.querySelector('.contenedorTarjetas');
    const totalItems = container.children.length;
    const itemWidth = container.children[0].offsetWidth;

    // Update currentIndex based on the direction
    currentIndex += direction;

    // Ensure the index stays within bounds
    if (currentIndex < 0) {
        currentIndex = 0;
    } else if (currentIndex >= totalItems - 1) {
        currentIndex = totalItems - 1;
    }

    // Move the container
    const offset = -currentIndex * itemWidth;
    container.style.transform = `translateX(${offset}px)`;
}