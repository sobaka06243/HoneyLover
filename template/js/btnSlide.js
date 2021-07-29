let flag = false;
pageWidth = document.documentElement.scrollWidth;
if (pageWidth < 991) {
    $('.menu-element').slideUp();
}
$('.head').click(function() {
    pageWidth = document.documentElement.scrollWidth;
    if (pageWidth < 991) {
        if (!flag) {
            $('.menu-element').slideDown();
        } else {
            $('.menu-element').slideUp();
        }
    }

    flag = !flag;
});