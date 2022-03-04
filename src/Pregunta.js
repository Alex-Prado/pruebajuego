//!ABRIR EL MODAL
function toggle() {
  document.querySelector(".panel-modal").classList.add("active");
}

function listarPreguntas() {
  let action = "verpregunta";

  $.ajax({
    type: "POST",
    url: "../controller/Pregunta.php",
    data: {
      action: action,
    },
    success: function (r) {
      let res = JSON.parse(r);
      let template = "";
      //! LLENAR EL MODAL CON LA PREGUNTA Y SUS ALTERNATIVAS
      res.forEach((elem) => {
        template += `<h1>${elem.preguntas}</h1> <div class='respuesta'></div>`;
        elem.alternativas.forEach((el) => {
          template += `<button class='accion' value='${el.estado}'>${el.alternativa}</button>`;
        });
        template += `<input type='button' class='verificar' value='VERIFICAR'/>`;
      });
      $("#modal").html(template);
    },
  });
}
listarPreguntas();

window.addEventListener("load", function () {
  const boton = document.querySelectorAll("button");
  const caja = document.querySelector(".respuesta");
  const validar = document.querySelector(".verificar");
  console.log(boton);
  let contador = 0;
  boton.forEach((el) =>
  //!ACCION DE SELECCIONAR LA ALTERNATIVA Y OCULTARLA
    el.addEventListener("click", () => {
      if (contador == 0) {
        let cerrar = `<span> X </span>`; //ESTE ES EL QUE NO SE MUESTRA
        el.classList.add("none");
        caja.children = cerrar;
        caja.innerText = el.innerText;
        validar.name = el.value;
        contador++;
      }
    })
  );

  //!VALIDAR SI LA ALTERNATIVA SELECCIONADA ES CORRECTA O NO Y CERRAR EL MODAL
  validar.addEventListener("click", () => {
    console.log("salio");
    document.querySelector(".panel-modal").classList.remove("active");
    if (validar.name == 1) {
      document.querySelector(".juego").classList.add("bien");
    } else {
      document.querySelector(".juego").classList.add("mal");
    }
  });
});
