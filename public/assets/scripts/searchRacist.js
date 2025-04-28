document.addEventListener('DOMContentLoaded', () => {
    const findedData = document.getElementById('findedData')
    const raceSelectors = document.getElementsByClassName('race-selector')

    function getRacist(index) {
        console.log(index)
        axios.get(`/racesAPI?race_index=${index}`)
            .then(function (response) {
                // console.log(response.data)
                findedData.textContent = JSON.stringify(response.data, null, 4)
            })
            .catch(function (error) {
                console.log(error)
            })
            .finally(function () {
            })
    }
    
    [...raceSelectors].forEach(raceSelector => {
        raceSelector.addEventListener('click', function () {
            const index = this.getAttribute('data-index');

            // console.log(!raceSelector.classList.contains(['active']))
            
            if (index && !raceSelector.classList.contains(['active'])) {
                getRacist(index);
            }

            [...raceSelectors].forEach(btn => {
                btn.classList.remove('active');
            });

            raceSelector.classList.add(['active'])
            
        })
    });
})