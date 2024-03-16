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

// $(document).ready(function(){

//     $("nav").hide(); // Hide the navigation bar first

//     $(window).scroll(function () {  // Listen for the window's scroll event
//         if (isScrolledAfterElement("#home")) { // if it has scrolled beyond the #home element
//             $('nav').fadeOut();  // Hide the navigation bar
//         } else {
//             $('nav').fadeIn(); // Show it
//         }
//     });

//     // Function that returns true if the window has scrolled beyond the given element
//     function isScrolledAfterElement(elem) {
//         var $elem = $(elem);
//         var $window = $(window);

//         var docViewTop = $window.scrollTop();
//         var docViewBottom = docViewTop + $window.height();

//         var elemTop = $elem.offset().top;

//         return elemTop <= docViewBottom;
//     }
// });
