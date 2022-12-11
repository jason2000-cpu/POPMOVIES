const arrows = document.querySelectorAll(".arrow");
const movieLists = document.querySelectorAll(".movie-list");

arrows.forEach((arrow, i) => {
  const itemNumber = movieLists[i].querySelectorAll("img").length;
  let clickCounter = 0;
  arrow.addEventListener("click", () => {
    const ratio = Math.floor(window.innerWidth / 270);
    clickCounter++;
    if (itemNumber - (4 + clickCounter) + (4 - ratio) >= 0) {
      movieLists[i].style.transform = `translateX(${
        movieLists[i].computedStyleMap().get("transform")[0].x.value - 300
      }px)`;
    } else {
      movieLists[i].style.transform = "translateX(0)";
      clickCounter = 0;
    }
  });

  console.log(Math.floor(window.innerWidth / 270));
});

//TOGGLE

const ball = document.querySelector(".toggle-ball");
const items = document.querySelectorAll(
  ".container,.movie-list-title,.navbar-container,.sidebar,.left-menu-icon,.toggle"
);

ball.addEventListener("click", () => {
  items.forEach((item) => {
    item.classList.toggle("active");
  });
  ball.classList.toggle("active");
});



//Login and Signup

// Get the modal
const  modal = document.querySelector('.login-form');
const login_btn = document.querySelector('.login-form');
const body = document.querySelector('.bdy');


// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if(event.target == modal) {
    modal.style.display = "none";
  }
}

function login(){
  if(modal.style.display === "none") {
    body.style.background.color = 'grey'
    modal.style.display = "unset"
  }else{
    body.style.background.color = 'none'
    modal.style.display = "none"
  }
}