const navbar = document.querySelector('.sticky-top');
window.onscroll = () => {
    if (window.scrollY > 10) {
        navbar.classList.add('nav-active');
    } else {
        navbar.classList.remove('nav-active');
    }
};


$('#pills-tab a').on('click', function (e) {
  e.preventDefault()
  $(this).tab('show')
})
