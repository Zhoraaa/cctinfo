document.addEventListener('DOMContentLoaded', () => {
    // Запоминаем все поисковые поля на странице
    const searchInputs = document.querySelectorAll('.search');
    // Корзина для связывания полей с элементами для поиска
    const searchHandlers = new Map();

    function createSearchHandler(searchTarget) {
        // Запоминаем все искомые элементы для текущего поля
        const searchableElements = Array.from(document.querySelectorAll(`#${searchTarget} > .searchable`));

        return function () {
            // Искомое значение
            const searchTerm = this.value.toLowerCase();
            // Есть ли совпадения
            let hasMatches = false;

            searchableElements.forEach(searchable => {
                const isMatch = searchable.innerText.toLowerCase().includes(searchTerm) || searchable.dataset.index.toLowerCase().includes(searchTerm);

                searchable.classList.toggle('d-none', !isMatch);

                if (isMatch) hasMatches = true;
            });

            // Текст, на случай если ничего не найдено
            const searchFailed = document.querySelector(`#${searchTarget}SearchFailed`);
            // Обработка случая, когда ничего не найдено
            if (searchFailed) {
                searchFailed.classList.toggle('d-none', hasMatches);
            }
        }
    }

    searchInputs.forEach(searchBar => {
        const target = searchBar.getAttribute('data-search-target');
        if (target) {
            const handler = createSearchHandler(target);
            searchHandlers.set(searchBar, handler);
            searchBar.addEventListener('input', handler);
            searchBar.addEventListener('change', handler);
            searchBar.addEventListener('paste', handler);
        }
    });

})