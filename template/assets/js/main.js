
function showMobileNav() {
    var mobileMenu = document.getElementById('mobile_Nav--expanded');
    if (mobileMenu.style.display === 'none') {
        mobileMenu.style.display = 'flex';
    } else {
        mobileMenu.style.display = 'none';
    }
}
