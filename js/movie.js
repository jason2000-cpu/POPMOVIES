import  '../movie.html'  as {movie_page}
const watchButtons = document.getElementsByClassName('movie-list-item-button');


console.log(watchButtons)
    
function  redirect(){
    // console.log(watchButtons)

    document.querySelectorAll('.movie-list-item-button').forEach(button => {
        button.addEventListener('click', () => {
            //const moviePage = window.open('./movie.html')
           //const details = moviePage.document.getElementsByClassName('details')
           fetch("../movie.html")
           .then(response => response.text())
           then(data =>{console.log(data)})
           .catch(err =>{console.log(err)})
           
            console.log("hello world!!!");
            //location.replace("./movie.html")
    //         let baseUrl = "http://localhost:3000/";
    //         let url = baseUrl.concat(button.value)
    //         fetch(url, {  
    //              method: 'GET', 
    //              mode: 'cors', 
    //              cache: 'no-cache', 
    //              credentials: 'same-origin',
    //              headers: {
    //                    'Content-Type': 'application/json'
    //              }
    // })
    //         .then(response=> response.json())
    //         .then(data=>{
    //             //console.log(data)
    //             details.innerHTML +=`
    //             <h2>${data.title}</h1>
    //             <p>${data.description}</p>
    //             `
    //         })
    //         .catch(err =>{console.log(err)})
            
            
        });
    });



    
    // for(i = 0; i < watchButtons.length; i++){
        
    //     watchButtons[i].addEventListener('click', ()=>{
    //         //location.replace("./movie.html")
    //         //console.log("hello world!!")
    //          console.log((this).value)
    //          let baseUrl = 'http://localhost:3000/';
    //          let url = baseUrl.concat('trending/1');
            // fetch(url,{
            //    "method": "GET"
            // })
            // .then(response=> response.json())
    //         .then(data =>{
    //             console.log(data)
                // details.innerHTML +=`
                // <h2>${data.title}</h1>
                // <p>${data.description}</p>
                // `
    //         })
    //     })
    // }
}
    