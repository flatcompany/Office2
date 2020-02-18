let menus = [...document.querySelectorAll('.user-menu')];

menus.map((menu) => {
    let items = menu.querySelectorAll('.user-item');
    let button = menu.querySelector('.user-btn');

    let active = false;

    const length = items.length;
    const arc = Math.PI/2 * (1/length);
    const radius = 100;

    button.addEventListener('click', (e) => {
        
        e.preventDefault();

        active = !active;

        if (active) {

            button.classList.add('user-btn_active')

            for (let i = 0; i < length; i++) {
                const angle = i * arc;
                const x = radius * Math.cos(angle);
                const y = radius * Math.sin(angle);

                items[i].style.left = 50 + x + '%';
                items[i].style.top = 50 + y + '%';
            }
        }

        else {
            button.classList.remove('user-btn_active');

            for (let i = 0; i < length; i++) {
                items[i].removeAttribute('style');
            }

        }
    });
});