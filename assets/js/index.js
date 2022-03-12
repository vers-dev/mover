const accordion = () => {
    const PATH = window.location.pathname;

    const $ = document.querySelector('.accordion');

    if (!$) return;

    const items = $.querySelectorAll('.accordion-item');


    items.forEach(el => {
        const elContent = el.querySelector('.accordion-content');
        const elHeader = el.querySelector('.accordion-header');
        elHeader.addEventListener('click', (ev) => {
            if (elContent.style.maxHeight) {
                elContent.style.maxHeight = null;
            } else{
                elContent.style.maxHeight = el.scrollHeight + "px";
            }
        })
    })


}


const init = () => {
    accordion();
}

document.addEventListener('DOMContentLoaded', init)