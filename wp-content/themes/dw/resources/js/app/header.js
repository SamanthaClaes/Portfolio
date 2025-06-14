console.log('test du header')

document.addEventListener('DOMContentLoaded', () => {
    const header = document.querySelector('header');
    if (header) {
        header.classList.add('animate-slide-in');
    }
});
