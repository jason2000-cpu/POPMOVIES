const Modal = document.getElementById('signup_modal');
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






function redirect(){
    document.querySelectorAll('.movie-list-item-button').forEach(button =>{
        button.addEventListener('click', ()=>{
            if(window.localStorage.user_name){
                console.log(button.value);
                const valArr = button.value.split("/");
                console.log(valArr)
                window.location.href= './movie.php?'+"category="+valArr[0]+"&id="+valArr[1];
            }else{
                Modal.style.display = "unset";
            }
        })
    })
}














 setInterval(()=>{
       if(window.localStorage.user_name){
        //alert(window.localStorage.user_name);
        document.querySelector('.profile-container').style.visibility= 'visible'
        //document.querySelector('.profile-btns').style.display = 'none';
        document.querySelector('.profile-text').innerText = window.localStorage.user_name;
        //document.querySelector('.signupModal').style.display = 'none';
       // document.querySelector('.loginModal').style.display = 'none';

    }else{
       document.querySelector('.profile-container').style.visibility='hidden';
       document.querySelector('.profile-btns').style.display = 'unset';

    }
 },0)