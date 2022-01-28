$(".hamburger").on("click", function () {
  $(".hamburger").toggleClass("open");
});

$(window).scroll(function () {
  let elementos = $(".element");
  if(elementos.length != 0){
  let alturaActual = document.documentElement.scrollTop;

  for (var i = 0; i < elementos.length; i++) {
    let alturaElemento = elementos[i].offsetTop;

    if (alturaElemento - (window.screen.height - 300) < alturaActual) {
      elementos[i].classList.add("showElement");
      elementos[i].classList.remove("element");
    }
  }
}
});
