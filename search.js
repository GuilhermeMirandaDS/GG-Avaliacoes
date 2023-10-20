function search_card() {
    let input = document.getElementById('searchbar').value.toLowerCase();
    let cards = document.getElementsByClassName('card');
    let animesTitle = document.querySelector('.animes-title');
    let seriesTitle = document.querySelector('.series-title');
    let destaquesTitle = document.querySelector('.title-destaques');
    let popularesTitle = document.querySelector('.title-populares');
    let recomendacoesTitle = document.querySelector('.title-recomendacoes');
    let animesSub = document.querySelector('.animes-sub');
    let popularesSub = document.querySelector('.populares-sub');
    let seriesSub = document.querySelector('.series-sub');
    let animePrevArrow = document.querySelector('.anime-prev-arrow');
    let animeNextArrow = document.querySelector('.anime-next-arrow');
    let seriesPrevArrow = document.querySelector('.series-prev-arrow');
    let seriesNextArrow = document.querySelector('.series-next-arrow');
    let recomendacoesPrevArrow = document.querySelector('.recomendacoes-prev-arrow');
    let recomendacoesNextArrow = document.querySelector('.recomendacoes-next-arrow');
    let popularesPrevArrow = document.querySelector('.populares-prev-arrow');
    let popularesNextArrow = document.querySelector('.populares-next-arrow');
    let destaquesPrevArrow = document.querySelector('.destaques-prev-arrow');
    let destaquesNextArrow = document.querySelector('.destaques-next-arrow');
    let notFoundMessage = document.getElementById('not-found-message');
    let foundInAnimes = false;
    let foundInSeries = false;
    let foundInPopulares = false;
    let foundInRecomendacoes = false;
    let foundInDestaques = false;



    for (let i = 0; i < cards.length; i++) {
        let cardTitle = cards[i].getElementsByClassName('card-title')[0].textContent.toLowerCase();

        if (cardTitle.includes(input)) {
            cards[i].style.display = 'list-item';

            if (cards[i].parentNode.id === 'card-container-animes') {
                foundInAnimes = true;
            } 
            if (cards[i].parentNode.id === 'card-container-series') {
                foundInSeries = true;
            }
            if (cards[i].parentNode.id === 'card-container-populares') {
                foundInPopulares = true;
            }
            if (cards[i].parentNode.id === 'card-container-destaques') {
                foundInDestaques = true;
            }
            else if (cards[i].parentNode.id === 'card-container-recomendacoes') {
                foundInRecomendacoes = true;
            }
        } else {
            cards[i].style.display = 'none';
        }
    }

    if (!foundInAnimes) {
        animesTitle.style.display = 'none';
        animePrevArrow.style.display = 'none';
        animeNextArrow.style.display = 'none';
        animesSub.style.display = 'none';
    } else {
        animesTitle.style.display = 'block';
        animePrevArrow.style.display = 'block';
        animeNextArrow.style.display = 'block';
        animesSub.style.display = 'block';
    }

    if (!foundInSeries) {
        seriesTitle.style.display = 'none';
        seriesPrevArrow.style.display = 'none';
        seriesNextArrow.style.display = 'none';
        seriesSub.style.display = 'none';
    } else {
        seriesTitle.style.display = 'block';
        seriesPrevArrow.style.display = 'block';
        seriesNextArrow.style.display = 'block';
        seriesSub.style.display = 'block';
    }
    if (!foundInRecomendacoes) {
        recomendacoesTitle.style.display = 'none';
        recomendacoesPrevArrow.style.display = 'none';
        recomendacoesNextArrow.style.display = 'none';
        recomendacoesSub.style.display = 'none';
    } else {
        recomendacoesTitle.style.display = 'block';
        recomendacoesPrevArrow.style.display = 'block';
        recomendacoesNextArrow.style.display = 'block';
        recomendacoesSub.style.display = 'block';
    }
    if (!foundInPopulares) {
        popularesTitle.style.display = 'none';
        popularesPrevArrow.style.display = 'none';
        popularesNextArrow.style.display = 'none';
        popularesSub.style.display = 'none';
    } else {
        popularesTitle.style.display = 'block';
        popularesPrevArrow.style.display = 'block';
        popularesNextArrow.style.display = 'block';
        popularesSub.style.display = 'block';
    }
    if (!foundInDestaques) {
        destaquesTitle.style.display = 'none';
        destaquesPrevArrow.style.display = 'none';
        destaquesNextArrow.style.display = 'none';
        destaquesSub.style.display = 'none';
    } else {
        destaquesTitle.style.display = 'block';
        destaquesPrevArrow.style.display = 'block';
        destaquesNextArrow.style.display = 'block';
        destaquesSub.style.display = 'block';
    }
    if (!foundInAnimes && !foundInSeries && !foundInRecomendacoes && !foundInPopulares && !foundInDestaques) {
        notFoundMessage.style.display = 'block';
    } else {
        notFoundMessage.style.display = 'none';
    }
}

let currentCategoryFilter = 'all';

function applyCategoryFilter(category) {
    currentCategoryFilter = category;
    applyFilters();
}

function applyFilters() {
    let input = document.getElementById('searchbar').value.toLowerCase();
    let cards = document.getElementsByClassName('card');
    let foundInAnimes = false;
    let foundInSeries = false;
    let foundInPopulares = false;
    let foundInRecomendacoes = false;
    let foundInDestaques = false;

    for (let i = 0; i < cards.length; i++) {
        let cardTitle = cards[i].getElementsByClassName('card-title')[0].textContent.toLowerCase();
        let cardCategory = cards[i].getAttribute('data-category');

        if ((cardTitle.includes(input) || input === '') &&
            (currentCategoryFilter === 'all' || cardCategory === currentCategoryFilter)) {
            cards[i].style.display = 'list-item';

            

        } else {
            cards[i].style.display = 'none';
        }
    }
}

let currentYearFilter = 'all';

function applyYearFilter(year) {
    currentYearFilter = year;
    applyFilters();
}

function applyFilters() {
    let input = document.getElementById('searchbar').value.toLowerCase();
    let cards = document.getElementsByClassName('card');
    let foundInAnimes = false;
    let foundInSeries = false;
    let foundInPopulares = false;
    let foundInRecomendacoes = false;
    let foundInDestaques = false;

    for (let i = 0; i < cards.length; i++) {
        let cardTitle = cards[i].getElementsByClassName('card-title')[0].textContent.toLowerCase();
        let cardCategory = cards[i].getAttribute('data-category');
        let cardYear = cards[i].getAttribute('data-year');

        if ((cardTitle.includes(input) || input === '') &&
            (currentCategoryFilter === 'all' || cardCategory === currentCategoryFilter) &&
            (currentYearFilter === 'all' || cardYear === currentYearFilter)) {
            cards[i].style.display = 'list-item';

        } else {
            cards[i].style.display = 'none';
        }
    }
}

let currentHatingFilter = 'all';

function applyHatingFilter(hating) {
    currentHatingFilter = hating;
    applyFilters();
}

function applyFilters() {
    let input = document.getElementById('searchbar').value.toLowerCase();
    let cards = document.getElementsByClassName('card');
    let foundInAnimes = false;
    let foundInSeries = false;
    let foundInPopulares = false;
    let foundInRecomendacoes = false;
    let foundInDestaques = false;

    for (let i = 0; i < cards.length; i++) {
        let cardTitle = cards[i].getElementsByClassName('card-title')[0].textContent.toLowerCase();
        let cardCategory = cards[i].getAttribute('data-category');
        let cardYear = cards[i].getAttribute('data-year');
        let cardHating = cards[i].getAttribute('data-hating');

        if ((cardTitle.includes(input) || input === '') &&
            (currentCategoryFilter === 'all' || cardCategory === currentCategoryFilter) &&
            (currentYearFilter === 'all' || cardYear === currentYearFilter) &&
            (currentHatingFilter === 'all' || cardHating === currentHatingFilter)) {
            cards[i].style.display = 'list-item';

        } else {
            cards[i].style.display = 'none';
        }
    }
}



