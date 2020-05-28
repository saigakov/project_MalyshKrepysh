window.addEventListener('DOMContentLoaded', () => {

    //hamburger
    const list = document.querySelector('.header__list'),
        menuItem = document.querySelectorAll('.header__item'),
        hamburger = document.querySelector('.hamburger');

    hamburger.addEventListener('click', () => {
        hamburger.classList.toggle('hamburger_active');
        list.classList.toggle('header__list_active');
    });

    menuItem.forEach(item => {
        item.addEventListener('click', () => {
            hamburger.classList.toggle('hamburger_active');
            list.classList.toggle('header__list_active');
        })
    });

    //hide header
    const header = document.querySelector('header');

    document.onwheel = (event) => {
        /* console.log(event); */
        if (event.deltaY > 0 ) {
            header.classList.add('header_active');
        } else {
            header.classList.remove('header_active');
        }
    };

    /* document.body.style.overflow = 'hidden'; */
        

    




});