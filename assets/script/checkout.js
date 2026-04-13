document.addEventListener('DOMContentLoaded', function () {




    const customAddressSelect = document.querySelector('#addressSelect');
    if (!customAddressSelect) return;
    const customAddressSelectCurrent = customAddressSelect.querySelector('.form__select-current');
    const customAddressSelectCurrentText = customAddressSelect.querySelector('.form__select-current .text');
    const customAddressSelectList = customAddressSelect.querySelector('.form__select-list');
    const customAddressSelectItems = customAddressSelect.querySelectorAll('.form__select-list li');
    if (
        !customAddressSelectCurrent ||
        !customAddressSelectCurrentText ||
        !customAddressSelectList ||
        !customAddressSelectItems.length
    ) return;
    customAddressSelectCurrent.addEventListener('click', function (e) {
        e.stopPropagation();
        customAddressSelect.classList.toggle('open');
    });

    customAddressSelectItems.forEach(function (customAddressSelectItem) {
        customAddressSelectItem.addEventListener('click', function (e) {
            e.stopPropagation();

            const currentAddressText = customAddressSelectCurrentText.textContent.trim();
            const selectedAddressText = customAddressSelectItem.textContent.trim();

            customAddressSelectCurrentText.textContent = selectedAddressText;
            customAddressSelectItem.textContent = currentAddressText;

            customAddressSelect.classList.remove('open');
        });
    });

    document.addEventListener('click', function (e) {
        if (!customAddressSelect.contains(e.target)) {
            customAddressSelect.classList.remove('open');
        }
    });







    const deliveryTypeRadios = document.querySelectorAll('input[name="delivery_type"]');
    const pickupBlock = document.querySelector('.form__pickup');
    const deliveryBlock = document.querySelector('.form__delivery');
    const deliveryInputs = document.querySelectorAll('.form__address input');

    if (!deliveryTypeRadios.length || !pickupBlock || !deliveryBlock || !deliveryInputs.length) return;

    function toggleDeliveryTypeBlocks() {
        const selectedDeliveryType = document.querySelector('input[name="delivery_type"]:checked');

        if (!selectedDeliveryType) return;

        if (selectedDeliveryType.value === 'pickup') {
            pickupBlock.style.display = 'block';
            deliveryBlock.style.display = 'none';

            deliveryInputs.forEach(function (input, index) {
                input.removeAttribute('required');
            });
        } else {
            pickupBlock.style.display = 'none';
            deliveryBlock.style.display = 'block';

            deliveryInputs.forEach(function (input, index) {
                if (index < 2) {
                    input.setAttribute('required', 'required');
                } else {
                    input.removeAttribute('required');
                }
            });
        }
    }

    toggleDeliveryTypeBlocks();

    deliveryTypeRadios.forEach(function (radio) {
        radio.addEventListener('change', toggleDeliveryTypeBlocks);
    });






    $(document).ready(function () {
        const $telInputs = $('input[type="tel"]');
        // Если на странице нет таких полей — выходим
        if (!$telInputs.length) return;

        $.fn.setCursorPosition = function (pos) {
            const el = $(this).get(0);
            if (!el) return this;

            if (el.setSelectionRange) {
                el.setSelectionRange(pos, pos);
            } else if (el.createTextRange) {
                const range = el.createTextRange();
                range.collapse(true);
                range.moveEnd('character', pos);
                range.moveStart('character', pos);
                range.select();
            }
            return this;
        };

        $telInputs
        .mask('+7 (999) 999 99 99', { autoclear: false })
        .on('click', function (e) {
            const value = $(this).val();
            const clean = value.replace(/[^0-9]/g, '');

            if (clean.length <= 3) {
                e.preventDefault();
                $(this).setCursorPosition(6);
            }
        });
    });









});