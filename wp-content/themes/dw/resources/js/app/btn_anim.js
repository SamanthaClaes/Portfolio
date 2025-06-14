document.addEventListener('DOMContentLoaded', () => {
    const button = document.querySelector('.animated-submit');
    if (!button) return;

    button.addEventListener('click', () => {
        button.classList.add('clicked');
    });
});

