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


        // const image = document.createElement('img');
        // const span = document.createElement('span');
        // const p = document.createElement('p');
        // const btn = document.createElement('button')
        // image.setAttribute('class', 'movie-list-item-img')
        // image.setAttribute('src', `${movie.url}`);

        // span.setAttribute('class', 'movie-list-item-title')
        // const spaNode = document.createTextNode(`${movie.description}`)
        // span.appendChild(spaNode)

        // p.setAttribute('class', 'movie-list-item-desc');
        // const pNode = document.createTextNode(`${movie.description}`);
        // p.appendChild(pNode);

        // btn.setAttribute('class', 'movie-list-item-button');
        // btn.setAttribute('value', `series/${movie.id}`)
        // const btnNode = document.createTextNode('Watch')
        // btn.appendChild(btnNode)
        
        // const divEl = document.createElement('div');
        // divEl.setAttribute('class', 'movie-list-item')
        // divEl.appendChild(image)
        // divEl.appendChild(span)
        // divEl.appendChild(p)
        // divEl.appendChild(btn)
        // trending.appendChild(divEl)




        trending.innerHTML +=
         `
            <div class="movie-list-item">
                <img class="movie-list-item-img" src=${movie.url} alt="">
                <span class="movie-list-item-title">${movie.title}</span>
                <p class="movie-list-item-desc">${movie.description}</p>
                <button class="movie-list-item-button" value=series/${movie.id}>Watch</button>
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


        //         const image = document.createElement('img');
        // const span = document.createElement('span');
        // const p = document.createElement('p');
        // const btn = document.createElement('button')
        // image.setAttribute('class', 'movie-list-item-img')
        // image.setAttribute('src', `${movie.url}`);

        // span.setAttribute('class', 'movie-list-item-title')
        // const spaNode = document.createTextNode(`${movie.description}`)
        // span.appendChild(spaNode)

        // p.setAttribute('class', 'movie-list-item-desc');
        // const pNode = document.createTextNode(`${movie.description}`);
        // p.appendChild(pNode);

        // btn.setAttribute('class', 'movie-list-item-button');
        // btn.setAttribute('value', `series/${movie.id}`)
        // const btnNode = document.createTextNode('Watch')
        // btn.appendChild(btnNode)
        
        // const divEl = document.createElement('div');
        // divEl.setAttribute('class', 'movie-list-item')
        // divEl.appendChild(image)
        // divEl.appendChild(span)
        // divEl.appendChild(p)
        // divEl.appendChild(btn)
        // popular.appendChild(divEl)






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


        // const image = document.createElement('img');
        // const span = document.createElement('span');
        // const p = document.createElement('p');
        // const btn = document.createElement('button')
        // image.setAttribute('class', 'movie-list-item-img')
        // image.setAttribute('src', `${movie.url}`);

        // span.setAttribute('class', 'movie-list-item-title')
        // const spaNode = document.createTextNode(`${movie.description}`)
        // span.appendChild(spaNode)

        // p.setAttribute('class', 'movie-list-item-desc');
        // const pNode = document.createTextNode(`${movie.description}`);
        // p.appendChild(pNode);

        // btn.setAttribute('class', 'movie-list-item-button');
        // btn.setAttribute('value', `series/${movie.id}`)
        // const btnNode = document.createTextNode('Watch')
        // btn.appendChild(btnNode)
        
        // const divEl = document.createElement('div');
        // divEl.setAttribute('class', 'movie-list-item')
        // divEl.appendChild(image)
        // divEl.appendChild(span)
        // divEl.appendChild(p)
        // divEl.appendChild(btn)
        // newRelease.appendChild(divEl)







        newRelease.innerHTML +=
         `
            <div class="movie-list-item">
                <img class="movie-list-item-img" src=${movie.url} alt="">
                <span class="movie-list-item-title">${movie.title}</span>
                <p class="movie-list-item-desc">${movie.description}</p>
                <button class="movie-list-item-button"><a href="http://localhost:3000/new-release/${movie.id}">Watch</a></button>
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


        // const image = document.createElement('img');
        // const span = document.createElement('span');
        // const p = document.createElement('p');
        // const btn = document.createElement('button')
        // image.setAttribute('class', 'movie-list-item-img')
        // image.setAttribute('src', `${movie.url}`);

        // span.setAttribute('class', 'movie-list-item-title')
        // const spaNode = document.createTextNode(`${movie.description}`)
        // span.appendChild(spaNode)

        // p.setAttribute('class', 'movie-list-item-desc');
        // const pNode = document.createTextNode(`${movie.description}`);
        // p.appendChild(pNode);

        // btn.setAttribute('class', 'movie-list-item-button');
        // btn.setAttribute('value', `series/${movie.id}`)
        // const btnNode = document.createTextNode('Watch')
        // btn.appendChild(btnNode)
        
        // const divEl = document.createElement('div');
        // divEl.setAttribute('class', 'movie-list-item')
        // divEl.appendChild(image)
        // divEl.appendChild(span)
        // divEl.appendChild(p)
        // divEl.appendChild(btn)
        // series.appendChild(divEl)




        series.innerHTML +=
         `
            <div class="movie-list-item">
                <img class="movie-list-item-img" src=${movie.url} alt="">
                <span class="movie-list-item-title">${movie.title}</span>
                <p class="movie-list-item-desc">${movie.description}</p>
                <button class="movie-list-item-button"><a href="http://localhost:3000/series/${movie.id}">Watch</a></button>
            </div>
        `;
        
    });
})
.catch(error => console.error(error));


//login/signup authentication

const loginBtn = document.querySelector('.loginBtn')
const formData = document.querySelector('#signin')
const user = formData.username;
const passwd = formData.password;


//login authentication
loginBtn.addEventListener('click', ()=>{
      fetch('http://localhost:3000/users',{
        'method': 'GET', 
    })
    .then(response=> response.json())
    .then(data=>{
        for(i = 0; i < data.length; i++){
            if(data[i].username === user.value && data[i].password === passwd.value){
                data[i].loginStatus = true;
                console.log(data[i].loginStatus)
                alert(`Hello ${user.value} you are logged in!!`);
                 return
            }
        }
         alert("Wrong username or password")
        
    })
})

