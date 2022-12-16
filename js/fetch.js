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
const loginFormData = document.querySelector('#signin')
const user = loginFormData.username;
const passwd = loginFormData.password;


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


//signup authentication

const signupFormData = document.querySelector('#signup');
const regBtn = document.querySelector('#register-btn');

regBtn.addEventListener('click', ()=>{
    let data =   {
            "loginStatus": true,
            "username": signupFormData.username.value,
            "email": signupFormData.email.value,
            "pnoneNo": signupFormData.phoneNo.value,
            "password": signupFormData.password.value
        }
        console.log(data)
        fetch("http://localhost:3000/users", {
            "method": "POST",
            "headers":{
                "content-type": "application/json",
            },
            "body": JSON.stringify(data)

        })
        .then(response => response.json())
        .then(data =>{
            console.log("Success", data)
        })
        .then(err => console.log(err))
})
