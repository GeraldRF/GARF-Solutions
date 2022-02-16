$(".hamburger").on("click", function () {
  $(".hamburger").toggleClass("open");
});

$('#whapp').on('click',function() {
  var url = "https://wa.me/50663707287?text=" + obtener_mensaje() + "&app_absent=0";
  var win = window.open(url, '_blank');
  // Cambiar el foco al nuevo tab (punto opcional)
  win.focus();
});

$('#correo').on('click', function(){
  var url = 'mailto:gerald.rafo@gmail.com?subject=Solicitud de información&body='+ obtener_mensaje();
  var win = window.open(url, '_blank');
  win.focus();
});

function setMsg(id){


  
}

function obtener_mensaje() {var hora = new Date().getHours();
  var mensaje = "";

  if (hora > 3 && hora < 12)
      mensaje = "Buenos dias ";
  else if (hora >= 12 && hora < 18)
      mensaje = "Buenas tardes "
  else mensaje = "Buenas noches "

  mensaje += "Gerald, deseo obtener más información sobre sus servicios, por favor."
  return mensaje;
}

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
