const watchButtons = document.getElementsByClassName('movie-list-item-button');

function redirect(){
    document.querySelectorAll('.movie-list-item-button').forEach(button =>{
        button.addEventListener('click', ()=>{
            console.log(button.value);
            const valArr = button.value.split("/");
            console.log(valArr)
            window.location.href= './movie.php?'+"category="+valArr[0]+"&id="+valArr[1];
        })
    })
}
