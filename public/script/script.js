let sections = document.querySelectorAll('section');
let navLinks = document.querySelectorAll('header nav a');

let observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            let id = entry.target.getAttribute('id');
            navLinks.forEach(link => {
                link.classList.remove('active');
            });
            document.querySelector('header nav a[href="#' + id + '"]').classList.add('active');
        }
    });
}, { threshold: 0.5 });

sections.forEach(section => {
    observer.observe(section);
});
