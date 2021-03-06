let $ = document.querySelector.bind(document);


let menu = $('.navbar__menu');
$('.navbar__trigger').addEventListener('click', (e) => {
    if (!menu.classList.contains('open')) {
        menu.classList.add('open');
    } else {
        menu.classList.remove('open');
    }
});
window.addEventListener('resize', (e) => {
    if (window.innerWidth > 740)
        menu.classList.remove('open');
});

window.addEventListener('click', function(e) {
    if(!e.target.closest('.dropdown-nav__menu--active')) {
        document.querySelectorAll('.dropdown-nav__menu--active').forEach((item) => {
            item.classList.remove('dropdown-nav__menu--active');
        });
    }
});
document.querySelectorAll('.dropdown-nav__trigger').forEach(function(item){
    item.addEventListener('click', (e) => {
        e.stopPropagation();
        let target = document.getElementById(item.getAttribute('data-target'));
        let classTarget;
        target.classList.forEach(element => {
                if(element.search('dropdown-nav') != -1){
                    classTarget = element;
                    return;
                }
        });
        if(classTarget.search('--active') != -1) {
            target.classList.remove(classTarget);
        }
        else {
            target.classList.add(classTarget+'--active');
        }

    });
});