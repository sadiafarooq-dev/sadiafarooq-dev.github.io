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

// Featured project gallery
const main = document.getElementById('featured-main');
document.querySelectorAll('.thumb').forEach(btn => {
    btn.addEventListener('click', () => {
        document.querySelectorAll('.thumb').forEach(t => t.classList.remove('active'));
        btn.classList.add('active');
        main.src = btn.dataset.src;
        main.alt = btn.dataset.alt;
    });
});

// Project filters
document.querySelectorAll('.chip').forEach(chip => {
    chip.addEventListener('click', () => {
        document.querySelectorAll('.chip').forEach(c => c.classList.remove('active'));
        chip.classList.add('active');
        const f = chip.dataset.filter;
        document.querySelectorAll('.grid .card').forEach(card => {
            card.hidden = f !== 'all' && card.dataset.cat !== f;
        });
    });
});

// Footer year
document.getElementById('year').textContent = new Date().getFullYear();
