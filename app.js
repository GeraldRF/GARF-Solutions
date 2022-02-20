$(".hamburger").on("click", function () {
  $(".hamburger").toggleClass("open");
});

$("#correo-msg").on("click", function () {
  window.open("mailto:gerald.rafo@gmail.com");
});

function setMsg(id) {
  var msg =
    obtener_hora() + "Gerald, espero te encuentres bien, tengo un caso de ";

  switch (id) {
    case "programacion": {
      msg += '"programación"';

      break;
    }
    case "configuracion-hosting": {
      msg += '"configuración de hosting y más"';

      break;
    }
    case "instalacion-software": {
      msg += '"instalación de software"';

      break;
    }
    case "mantenimiento-equipos": {
      msg += '"mantenimiento de equipos"';

      break;
    }
    case "asesoria-tecnologia": {
      msg += '"asesoría tecnológica"';

      break;
    }
    case "instalacion-camaras": {
      msg += '"instalación de cámaras"';

      break;
    }
  }

  msg += ", el cual es el siguiente:";

  $("#mensaje").val(msg);
}

function obtener_hora() {
  var hora = new Date().getHours();
  var mensaje = "";

  if (hora > 3 && hora < 12) mensaje = "Buenos dias ";
  else if (hora >= 12 && hora < 18) mensaje = "Buenas tardes ";
  else mensaje = "Buenas noches ";

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


let ultimaAltura = $(window).scrollTop();

$(window).scroll(function () {
  let alturaActual = $(window).scrollTop();

  if (alturaActual > ultimaAltura) {
    $('#main-navbar').removeClass("showNav").addClass('hidden');
    ultimaAltura = alturaActual;
  } else {
    $('#main-navbar').removeClass("hidden").addClass("showNav");
    ultimaAltura = alturaActual;
  }
});
