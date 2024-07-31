document.addEventListener('DOMContentLoaded', function() {
    const cardContainer = document.querySelector('.card-container');
    let direction = 1;

    function moveCards() {
        const maxScroll = cardContainer.scrollWidth - cardContainer.clientWidth;
        let newScroll = cardContainer.scrollLeft + direction;

        if (newScroll <= 0 || newScroll >= maxScroll) {
            direction *= -1;
        }

        cardContainer.scrollLeft += direction;
        requestAnimationFrame(moveCards);
    }

    moveCards();
});
