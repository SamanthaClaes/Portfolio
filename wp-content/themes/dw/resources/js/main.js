console.log('test')
console.log('test du header')

document.addEventListener('DOMContentLoaded', () => {
    const header = document.querySelector('header');
    if (header) {
        header.classList.add('animate-slide-in');
    }
});

document.addEventListener('DOMContentLoaded', () => {
    const button = document.querySelector('.animated-submit');
    if (!button) return;

    button.addEventListener('click', () => {
        button.classList.add('clicked');
    });
});

