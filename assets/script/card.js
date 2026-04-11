document.addEventListener("DOMContentLoaded", function(){




    (function productCardModule() {
        const triggers = document.querySelectorAll('.menu__item-overlay');
        const card = document.querySelector('.card');
        const overlay = document.querySelector('.opacite');
        const body = document.body;
        const optionGroups = document.querySelectorAll('[data-option]');

        const CLASS_ACTIVE = 'active';
        const CLASS_HIDDEN = 'hidden';

        function moveHighlight(group) {
            if (!group) return;

            const highlight = group.querySelector('.option-highlight');
            const activeBtn = group.querySelector('button.active');

            if (!highlight) return;

            if (!activeBtn) {
                highlight.style.opacity = '0';
                highlight.style.width = '0px';
                highlight.style.height = '0px';
                highlight.style.transform = 'translate(0, 0)';
                return;
            }

            highlight.style.opacity = '1';
            highlight.style.width = `${activeBtn.offsetWidth}px`;
            highlight.style.height = `${activeBtn.offsetHeight}px`;
            highlight.style.transform = `translate(${activeBtn.offsetLeft}px, ${activeBtn.offsetTop}px)`;
        }

        function initHighlights() {
            if (!optionGroups.length) return;
            optionGroups.forEach(moveHighlight);
        }

        function openCard(productId) {
            if (!card || !overlay || !body) return;

            console.log('Открыт товар с ID:', productId);

            card.classList.add(CLASS_ACTIVE);
            overlay.classList.add(CLASS_ACTIVE);
            body.classList.add(CLASS_HIDDEN);

            requestAnimationFrame(() => {
                requestAnimationFrame(initHighlights);
            });
        }

        function closeCard() {
            if (!card || !overlay || !body) return;

            card.classList.remove(CLASS_ACTIVE);
            overlay.classList.remove(CLASS_ACTIVE);
            body.classList.remove(CLASS_HIDDEN);
        }

        if (optionGroups.length) {
            optionGroups.forEach((group) => {
                group.addEventListener('click', (e) => {
                    const btn = e.target.closest('button');
                    if (!btn || !group.contains(btn)) return;

                    const allowEmpty = group.dataset.allowEmpty === 'true';
                    const isAlreadyActive = btn.classList.contains('active');

                    if (allowEmpty && isAlreadyActive) {
                        btn.classList.remove('active');
                        btn.setAttribute('aria-pressed', 'false');
                        moveHighlight(group);
                        return;
                    }

                    group.querySelectorAll('button').forEach((b) => {
                        b.classList.remove('active');
                        b.setAttribute('aria-pressed', 'false');
                    });

                    btn.classList.add('active');
                    btn.setAttribute('aria-pressed', 'true');

                    moveHighlight(group);
                });
            });

            window.addEventListener('resize', initHighlights);
        }

        if (triggers.length && card && overlay) {
            triggers.forEach((trigger) => {
                trigger.addEventListener('click', (e) => {
                    e.preventDefault();
                    const productId = trigger.dataset.id || null;
                    openCard(productId);
                });
            });

            card.addEventListener('click', (e) => {
                if (
                    e.target.closest('.card__close') ||
                    e.target.closest('.card__content-add')
                ) {
                    closeCard();
                }
            });

            overlay.addEventListener('click', closeCard);

            document.addEventListener('click', (e) => {
                if (
                    card.classList.contains(CLASS_ACTIVE) &&
                    !card.contains(e.target) &&
                    !e.target.closest('.menu__item-overlay')
                ) {
                    closeCard();
                }
            });

            document.addEventListener('keydown', (e) => {
                if (e.key === 'Escape') {
                    closeCard();
                }
            });
        }
    })();
    





})