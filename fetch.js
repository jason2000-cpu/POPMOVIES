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


//login/signup authentication
const loginBtn = document.querySelector('.loginBtn')
const formData = document.querySelector('#signin')
const username = formData.username.value;
const password = formData.password.value;

function loginAuth(username, password){
    console.log(formData.username.value, formData.password.value);
    fetch('http://localhost:3000/users',{
    "method": "GET"
})
.then(response => response.json())
.then(data =>{
    data.forEach(user =>{
        //console.log(`${user.username === formData.username.value} \n ${user.password === formData.password.value}`)
        if(user.username === username && user.password === password){
            // console.log(`Hello ${user.username}.  Welcome back`)
            // user.loginStatus= true;
            return true
        }else{
            // console.log(`Wrong username or password`)
            return false
        }
    })
    
})
.catch(err => console.log(err))

}

loginBtn.addEventListener('click', ()=>{
    console.log(loginAuth(username, password))
})