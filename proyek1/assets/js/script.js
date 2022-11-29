const trigger = document.querySelectorAll('nav li');
    trigger.forEach((menu) => menu.addEventListener('click', toggle));
    
    function toggle() {
        trigger.forEach((item) => item != this ? item.classList.remove('active') : null);
        if (this.classList != 'active') {
            this.classList.toggle('active')
        }
    }
const mediaQuery = window.matchMedia('(min-width: 601px)')
if (mediaQuery.matches) {
    $(document).ready(function () {
        $(window).scroll(function () {
            $(window).height()
            if ($(window).scrollTop() > 1) {
                $("#navbar").css({ "background-color": "#fff" });
            }
            else {
                $("#navbar").css({ "background-color": "transparent" });
            }

        })
    })
}
$(document).ready(function(){
    $(".owl-carousel").owlCarousel({
        rtl:true,
        nav:true,
    }
  );
});