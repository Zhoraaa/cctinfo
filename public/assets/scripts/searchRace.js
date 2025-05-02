document.addEventListener('DOMContentLoaded', () => {
    let raceSelectors = []
    const originEvolutions = document.getElementById('originEvolutions');

    // Функция обновления списка селекторов рас
    function refreshRS() {
        raceSelectors = Array.from(document.getElementsByClassName('race-selector'));
    }

    refreshRS();

    function getRace(index) {
        // console.log(index)
        axios.get(`/racesAPI?race_index=${index}`)
            .then(function (response) {
                insertOriginData(response.data.origin)
            })
            .catch(function (error) {
                console.log(error)
            })
            .finally(function () {
            })
    }

    function handleRaceSelectorClick() {
        // Достаём индекс расы
        const index = this.getAttribute('data-index');

        // Достаём информацию о расе если кнопка не была нажата ранее
        if (index && !this.classList.contains(['active'])) {
            getRace(index);

            // Стираем запись о предыдущей последней нажатой кнопке и записываем новую
            [...raceSelectors].forEach(btn => {
                btn.classList.remove('active');
            });

            document.querySelectorAll(`.race-selector[data-index="${index}"]`).forEach(selector => {
                selector.classList.add('active');
            });

            // Делаем видимым блок с описанием расы
            document.getElementById('originTable').classList.remove('d-none')
        }
    }

    // Проверяем все клики на странице, если у цели есть класс селектора, выполняем функию селектора
    document.addEventListener('click', function (e) {
        if (e.target.classList.contains('race-selector')) {
            handleRaceSelectorClick.call(e.target);
        }
    })

    function insertOriginData(originData) {
        // Выводим основную информацию о расе
        document.getElementById('originName').textContent = originData.name;
        document.getElementById('originDesc').innerHTML = originData.description;

        const originPowers = document.getElementById('originPowers');

        // Очищаем контейнер перед добавлением новых способностей
        originPowers.innerHTML = '';

        if (originData.powers) {
            originData.powers.forEach(power => {
                // Создаём контейнер для способности
                const powerDiv = document.createElement('div');
                powerDiv.id = `${originData.name}`;
                powerDiv.className = 'power-item';

                // Создаём элементы для отображения информации о способности
                const powerName = document.createElement('h5');
                powerName.textContent = power.name;

                const powerDesc = document.createElement('span');
                powerDesc.innerHTML = power.description;

                const powerExpl = document.createElement('p');
                powerExpl.className = 'text-secondary fst-italic';
                powerExpl.textContent = power.explain || '';

                // Добавляем элементы в контейнер
                powerDiv.appendChild(powerName);
                powerDiv.appendChild(powerDesc);
                powerDiv.appendChild(powerExpl);
                powerDiv.appendChild(document.createElement('hr'))

                // Добавляем контейнер в основной блок
                originPowers.appendChild(powerDiv);
            });
        }

        if (originData.evolutions) {
            originEvolutions.innerHTML = '';

            originData.evolutions.forEach(evol => {
                // Создаём контейнер для эволюции
                const evolSelect = document.createElement('button');
                evolSelect.dataset.index = `${evol.index}`;
                evolSelect.textContent = evol.name;
                evolSelect.className = 'me-2 mb-2 btn btn-outline-primary race-selector';

                // Добавляем контейнер в основной элемент
                originEvolutions.appendChild(evolSelect)
            })

        }

        if (originData.parent) {
            const parent = originData.parent;

            originEvolutions.innerHTML = '';

            // Создаём контейнер для эволюции
            const evolSelect = document.createElement('button');
            evolSelect.dataset.index = `${parent}`;
            evolSelect.textContent = 'Назад';
            evolSelect.className = 'me-2 mb-2 btn btn-outline-primary race-selector';

            // Добавляем контейнер в основной элемент
            originEvolutions.appendChild(evolSelect)
        }

        // Обновляем список селекторов
        refreshRS();
    }
})