document.addEventListener("DOMContentLoaded", function(){
  
    


    //counter
    document.addEventListener('click', (e) => {
        const btn = e.target.closest('.basket__counter-btn');
        if (!btn) return;

        const counter = btn.closest('.basket__counter');
        if (!counter) return;

        const valueEl = counter.querySelector('.basket__counter-value');
        if (!valueEl) return;

        let value = parseInt(valueEl.textContent) || 1;

        if (btn.classList.contains('basket__counter-btn--plus')) {
            value++;
        }

        if (btn.classList.contains('basket__counter-btn--minus')) {
            value = Math.max(1, value - 1);
        }

        valueEl.textContent = value;
    });




    //basket
    (function basketToggleModule() {
        const basketBtn = document.querySelector('.filters__basket');
        const basket = document.querySelector('.basket');
        const overlay = document.querySelector('.opacite');
        const body = document.body;

        // если чего-то нет — просто выходим
        if (!basketBtn || !basket || !overlay || !body) return;

        const CLASS_ACTIVE = 'active';
        const CLASS_HIDDEN = 'hidden';

        function openBasket() {
            basket.classList.add(CLASS_ACTIVE);
            overlay.classList.add(CLASS_ACTIVE);
            body.classList.add(CLASS_HIDDEN);
        }

        function closeBasket() {
            basket.classList.remove(CLASS_ACTIVE);
            overlay.classList.remove(CLASS_ACTIVE);
            body.classList.remove(CLASS_HIDDEN);
        }

        // открыть корзину
        basketBtn.addEventListener('click', (e) => {
            e.preventDefault();
            openBasket();
        });

        // закрытие по overlay
        overlay.addEventListener('click', closeBasket);

        // закрытие по кнопке внутри корзины (если есть)
        basket.addEventListener('click', (e) => {
            if (e.target.closest('.basket__close')) {
            closeBasket();
            }
        });
    })();





})