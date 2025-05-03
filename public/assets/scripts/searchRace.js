document.addEventListener('DOMContentLoaded', () => {
    let raceSelectors = []
    const badges = window.location.origin + '/assets/img/badges/';

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
        // Определяем элемент для статблока
        const originStats = document.getElementById('originStats');
        originStats.innerHTML = '';

        // 
        // Заполняем блок статистики
        // 
        function addStat(statParam, statBadgeIMG, statIMGalt) {
            // Создаём блок статистики
            const statDiv = document.createElement('div');
            statDiv.classList.add('col-sm', 'p-2', 'text-nowrap');
            // Создаём элемент для вставки баджа
            const statBadge = document.createElement('img');
            statBadge.classList.add('link-icon')
            statBadge.src = badges + statBadgeIMG + '.png';
            statBadge.alt = statIMGalt;
            // Создаём элемент для подписи
            const statText = document.createElement('span')
            statText.innerText = statParam;

            // Добавляем данные в родительский элемент
            statDiv.appendChild(statBadge);
            statDiv.appendChild(statText);

            // Добавляем блок статистики в основной список
            originStats.appendChild(statDiv);
        }
        // Здоровье
        if (originData.health) {
            addStat(originData.health, 'regeneration', 'Изначальный максимум здоровья')
        }
        // Питание
        if (originData.food) {
            addStat(originData.food, 'hunger', 'Рацион питания')
        }
        // Средняя продолжительность жизни
        if (originData.average) {
            const badge = (originData.average == 'Не стареют') ? 'glowing' : 'clock_00';
            const alt = (originData.average == 'Не стареют') ? 'Бессмертие' : 'Ожидаемая продолжительность жизни';
            addStat(originData.average, badge, alt)
        }
        // Взросление
        if (originData.adulting) {
            let badge = '';
            let alt = '';

            switch (originData.adulting) {
                case 'Проявляется во взрослом возрасте':
                case 'Неприменимо':
                    badge = 'light';
                    alt = 'Нет детства или в детстве не проявляется';
                    break;
                default:
                    badge = 'jump_boost';
                    alt = 'Взросление';
                    break;
            }

            addStat(originData.adulting, badge, alt);
        }

        // Очищаем контейнер перед добавлением новых способностей
        originPowers.innerHTML = '';

        // 
        // Описываем способности
        // 
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

        // 
        // Добавляем эволюции
        // 
        const originEvolutions = document.getElementById('originEvolutions');
        const evolSpace = document.getElementById('originevolSpaceEvolutions');
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

        // Возврат к родительскому блоку
        if (originData.parent) {
            const parent = originData.parent;

            originEvolutions.innerHTML = '';

            // Создаём контейнер для эволюции
            const evolSelect = document.createElement('button');
            evolSelect.dataset.index = `${parent}`;
            evolSelect.textContent = 'К основной расе';
            evolSelect.className = 'me-2 mb-2 btn btn-outline-primary race-selector';

            // Подписываем, что значит "эволюция"
            const evolExplain = document.createElement('span')
            evolExplain.innerHTML = '<br>Эта раса является эволюцией. Эволюции оставляют за собой все способности основной расы, если не сказано обратное.'
            evolExplain.classList.add('text-secondary', 'fst-italic')

            // Добавляем контейнер в основной элемент
            originEvolutions.appendChild(evolSelect);
            originEvolutions.appendChild(evolExplain);
        }

        const hasEvolutions = originData.parent || originData.evolutions.length > 0;
        originEvolutions.classList.toggle('d-none', !hasEvolutions)
        evolSpace.classList.toggle('d-none', hasEvolutions)
        // Обновляем список селекторов
        refreshRS();
    }
})