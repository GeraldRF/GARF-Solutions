$(".hamburger").on("click", function () {
  $(".hamburger").toggleClass("open");
});

$(window).scroll(function () {
  let elementos = $(".element");
  let elementosIzquierda = $(".elementLeft");
  let elementosDechera = $(".elementRight");

  let alturaActual = document.documentElement.scrollTop;

  if (elementos.length != 0) {
    for (var i = 0; i < elementos.length; i++) {
      let alturaElemento = elementos[i].offsetTop;
      if (alturaElemento - (window.screen.height - 400) < alturaActual) {
        elementos[i].classList.add("showElement");
        elementos[i].classList.remove("element");
      }
    }
  }
  if (elementosIzquierda != 0) {
    for (var i = 0; i < elementosIzquierda.length; i++) {
      let alturaElemento = elementosIzquierda[i].offsetTop;
      if (alturaElemento - (window.screen.height - 400) < alturaActual) {
        elementosIzquierda[i].classList.add("showElementLeft");
        elementosIzquierda[i].classList.remove("elementLeft");
      }
    }
  }
  if (elementosDechera != 0) {
    for (var i = 0; i < elementosDechera.length; i++) {
      let alturaElemento = elementosDechera[i].offsetTop;
      if (alturaElemento - (window.screen.height - 400) < alturaActual) {
        elementosDechera[i].classList.add("showElementRight");
        elementosDechera[i].classList.remove("elementRight");
      }
    }
  }
});
