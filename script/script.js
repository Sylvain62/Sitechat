function appear() {
document.querySelector('nav i').addEventListener("click", function(){
  document.querySelector('.pop').classList.toggle("show");
});

}

appear()

function black() {
  document.querySelector('nav i').addEventListener("click", function(){
    document.querySelector('#content').classList.toggle("is-active");
  });

}

black()