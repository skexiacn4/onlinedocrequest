function toggleMobileMenu(menu) {
    menu.classList.toggle('open');
}

$(document).ready(function() {
    $('.navbar-toggle').click(function() {
        $('nav').toggleClass('active');
    })
})


