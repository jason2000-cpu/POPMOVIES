const trending = document.querySelector('.trending');
const popular = document.querySelector('.popular');
const newRelease = document.querySelector('.new-release');
const series = document.querySelector('.series');



//trending movies fetch
fetch("http://localhost:3000/trending",{
    "method": "GET"
})
.then(response=> response.json())
.then(data=>{
    data.forEach(movie => {
        trending.innerHTML +=
         `
            <div class="movie-list-item">
                <img class="movie-list-item-img" src=${movie.url} alt="">
                <span class="movie-list-item-title">${movie.title}</span>
                <p class="movie-list-item-desc">${movie.description}</p>
                <button class="movie-list-item-button">Watch</button>
            </div>
        `;
        
    });
})
.catch(error => console.error(error));



//popular movies fetch

fetch("http://localhost:3000/popular",{
    "method": "GET"
})
.then(response=> response.json())
.then(data=>{
    data.forEach(movie => {
        popular.innerHTML +=
         `
            <div class="movie-list-item">
                <img class="movie-list-item-img" src=${movie.url} alt="">
                <span class="movie-list-item-title">${movie.title}</span>
                <p class="movie-list-item-desc">${movie.description}</p>
                <button class="movie-list-item-button">Watch</button>
            </div>
        `;
        
    });
})
.catch(error => console.error(error));

//new release fetch

fetch("http://localhost:3000/new-release",{
    "method": "GET"
})
.then(response=> response.json())
.then(data=>{
    data.forEach(movie => {
        newRelease.innerHTML +=
         `
            <div class="movie-list-item">
                <img class="movie-list-item-img" src=${movie.url} alt="">
                <span class="movie-list-item-title">${movie.title}</span>
                <p class="movie-list-item-desc">${movie.description}</p>
                <button class="movie-list-item-button">Watch</button>
            </div>
        `;
        
    });
})
.catch(error => console.error(error));

//series fetch

fetch("http://localhost:3000/series",{
    "method": "GET"
})
.then(response=> response.json())
.then(data=>{
    data.forEach(movie => {
        series.innerHTML +=
         `
            <div class="movie-list-item">
                <img class="movie-list-item-img" src=${movie.url} alt="">
                <span class="movie-list-item-title">${movie.title}</span>
                <p class="movie-list-item-desc">${movie.description}</p>
                <button class="movie-list-item-button">Watch</button>
            </div>
        `;
        
    });
})
.catch(error => console.error(error));