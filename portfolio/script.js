// Mobile menu
const toggle = document.querySelector('.nav-toggle');
const links = document.querySelector('.nav-links');
toggle.addEventListener('click', () => {
    const open = links.classList.toggle('open');
    toggle.setAttribute('aria-expanded', open);
});
links.querySelectorAll('a').forEach(a => a.addEventListener('click', () => {
    links.classList.remove('open');
    toggle.setAttribute('aria-expanded', false);
}));

// Project galleries (each gallery switches its own main image)
document.querySelectorAll('.gallery').forEach(gallery => {
    const main = gallery.querySelector('.gallery-main');
    gallery.querySelectorAll('.thumb').forEach(btn => {
        btn.addEventListener('click', () => {
            gallery.querySelectorAll('.thumb').forEach(t => t.classList.remove('active'));
            btn.classList.add('active');
            main.src = btn.dataset.src;
            main.alt = btn.dataset.alt;
        });
    });
});

// Project filters
document.querySelectorAll('.chip-btn').forEach(chip => {
    chip.addEventListener('click', () => {
        document.querySelectorAll('.chip-btn').forEach(c => c.classList.remove('active'));
        chip.classList.add('active');
        const f = chip.dataset.filter;
        document.querySelectorAll('.grid .card').forEach(card => {
            card.hidden = f !== 'all' && card.dataset.cat !== f;
        });
    });
});

// Footer year
document.getElementById('year').textContent = new Date().getFullYear();
