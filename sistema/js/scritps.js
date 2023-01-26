$(document).ready(function () {
  /* SELECT2 */

  $(".select2").select2({
    theme: "bootstrap4",
    width: "100%",
  });
  $(".selectUsuario").select2({
    theme: "bootstrap4",
    width: "100%",
  });
});

// Validar formularios
(function () {
  "use strict";
  window.addEventListener(
    "load",
    function () {
      // Get the forms we want to add validation styles to
      var forms = document.getElementsByClassName("needs-validation");
      // Loop over them and prevent submission
      var validation = Array.prototype.filter.call(forms, function (form) {
        form.addEventListener(
          "submit",
          function (event) {
            if (form.checkValidity() === false) {
              event.preventDefault();
              event.stopPropagation();
            } else {
              event.preventDefault();
            }
            form.classList.add("was-validated");
          },
          false
        );
      });
    },
    false
  );
})();

$("#empresa").change(function () {
  $.ajax({
    type: "POST",
    url: "php/cargarNit.php",
    data: $("#formIngresoEntrega").serialize(),
    dataType: "json",
    success: function (data) {
      $("#nit").val(data);
    },
  });
  $.ajax({
    type: "POST",
    url: "php/cargarEmpleados.php",
    data: $("#formIngresoEntrega").serialize(),
    success: function (data) {
      $("#empleado").html(data);
    },
  });
});

$("#empleado").change(function () {
  $.ajax({
    type: "POST",
    url: "php/cargarCargo.php",
    data: $("#formIngresoEntrega").serialize(),
    dataType: "json",
    success: function (data) {
      $("#cargo").val(data);
    },
  });
});

/* ENTREGAS */

function registrarEntrega() {
  let empresa = $.trim($("#empresa").val());
  let empleado = $.trim($("#empleado").val());
  let cantidad = $.trim($("#cantidad").val());
  let descripcion = $.trim($("#descripcion").val());

  if (
    empresa.length == "" ||
    empleado.length == "" ||
    cantidad.length == "" ||
    descripcion.length == ""
  ) {
    Swal.fire({
      position: "center",
      icon: "info",
      html: '<img src="../img/expertosip-logo.svg">',
      title: "<br>Hay campos obligatorios vacíos",

      showConfirmButton: false,
      timer: 2000,
    });
  }
}

function cargarEntrega(d) {
  let idEntrega = "idEntrega=" + d;
  $.ajax({
    type: "POST",
    url: "php/cargarEntrega.php",
    data: idEntrega,
    success: function (data) {
      $(".mostrarEntrega").html(data);
    },
  });
}

/* USUARIOS */

function formEditarusuario(datos) {
  d = datos.split("||");
  $(".idUsuario").val(d[0]);
  $(".nombre").val(d[1]);
  $(".cargo").val(d[2]);
  $(".area").val(d[3]);
  $(".usuario").val(d[4]);
  $(".clave").val(d[5]);
  $(".correo").val(d[6]);
  $("#modalEditarUsuario").modal("show");
}

function registrarUsuario() {
  $.ajax({
    type: "POST",
    url: "php/registrarUsuario.php",
    data: $("#registrarUsuario").serialize(),
    dataType: "json",
    success: function (d) {
      if (d == 1) {
        $("#modalRegistrarUsuario").modal("hide");
        Swal.fire({
          position: "center",
          icon: "success",
          html: '<img src="../img/expertosip-logo.svg">',
          title: "<br>Usuario Ingresado Correctamente",

          showConfirmButton: false,
          timer: 2000,
        }).then((result) => {
          window.location = "";
        });
      } else {
        Swal.fire({
          position: "center",
          icon: "error",
          html: '<img src="../img/expertosip-logo.svg">',
          title: "<br>Error al Intentar Ingresar Usuario",

          showConfirmButton: false,
          timer: 2000,
        });
      }
    },
  });
}

function editarUsuario() {
  $.ajax({
    type: "POST",
    url: "php/editarUsuario.php",
    data: $("#editarUsuario").serialize(),
    dataType: "json",
    success: function (d) {
      if (d == 1) {
        $("#modalEditarUsuario").modal("hide");
        Swal.fire({
          position: "center",
          icon: "success",
          html: '<img src="../img/expertosip-logo.svg">',
          title: "<br>Usuario Editado Correctamente",

          showConfirmButton: false,
          timer: 2000,
        }).then((result) => {
          window.location = "";
        });
      } else {
        Swal.fire({
          position: "center",
          icon: "error",
          html: '<img src="../img/expertosip-logo.svg">',
          title: "<br>Error al Intentar Editar Usuario",

          showConfirmButton: false,
          timer: 2000,
        });
      }
    },
  });
}

/* EMPRESAS */

function registrarEmpresa() {
  $.ajax({
    type: "POST",
    url: "php/registrarEmpresa.php",
    data: $("#registrarEmpresa").serialize(),
    dataType: "json",
    success: function (d) {
      if (d == 1) {
        $("#modalRegistrarEmpresa").modal("hide");
        Swal.fire({
          position: "center",
          icon: "success",
          html: '<img src="../img/expertosip-logo.svg">',
          title: "<br>Empresa Ingresada Correctamente",

          showConfirmButton: false,
          timer: 2000,
        }).then((result) => {
          window.location = "";
        });
      } else {
        Swal.fire({
          position: "center",
          icon: "error",
          html: '<img src="../img/expertosip-logo.svg">',
          title: "<br>Error al Intentar Ingresar Empresa",

          showConfirmButton: false,
          timer: 2000,
        });
      }
    },
  });
}

function formEditarEmpresa(datos) {
  d = datos.split("||");
  $(".idEmpresa").val(d[0]);
  $(".nombre").val(d[1]);
  $(".nit").val(d[2]);
  $(".estado").val(d[3]);
  $("#modalEditarEmpresa").modal("show");
}

function editarEmpresa() {
  $.ajax({
    type: "POST",
    url: "php/editarEmpresa.php",
    data: $("#editarEmpresa").serialize(),
    dataType: "json",
    success: function (d) {
      if (d == 1) {
        $("#modalEditarEmpresa").modal("hide");
        Swal.fire({
          position: "center",
          icon: "success",
          html: '<img src="../img/expertosip-logo.svg">',
          title: "<br>Usuario Editado Correctamente",

          showConfirmButton: false,
          timer: 2000,
        }).then((result) => {
          window.location = "";
        });
      } else {
        Swal.fire({
          position: "center",
          icon: "error",
          html: '<img src="../img/expertosip-logo.svg">',
          title: "<br>Error al Intentar Editar Usuario",

          showConfirmButton: false,
          timer: 2000,
        });
      }
    },
  });
}

/* EMPLEADOS */
function registrarEmpleado() {
  $.ajax({
    type: "POST",
    url: "php/registrarEmpleado.php",
    data: $("#registrarEmpleado").serialize(),
    dataType: "json",
    success: function (d) {
      if (d == 1) {
        $("#modalRegistrarEmpleado").modal("hide");
        Swal.fire({
          position: "center",
          icon: "success",
          html: '<img src="../img/expertosip-logo.svg">',
          title: "<br>Empleado Ingresado Correctamente",

          showConfirmButton: false,
          timer: 2000,
        }).then((result) => {
          window.location = "";
        });
      } else {
        Swal.fire({
          position: "center",
          icon: "error",
          html: '<img src="../img/expertosip-logo.svg">',
          title: "<br>Error al Intentar Ingresar Empleado",
          showConfirmButton: false,
          timer: 2000,
        });
      }
    },
  });
}

function formEditarEmpleado(datos) {
  d = datos.split("||");
  $(".idEmpleado").val(d[0]);
  $(".nombre").val(d[1]);
  $(".empresa").val(d[2]);
  $(".cargo").val(d[3]);
  $(".correo").val(d[4]);
  $(".estado").val(d[5]);
  $("#modalEditarEmpleado").modal("show");
}

function editarEmpleado() {
  $.ajax({
    type: "POST",
    url: "php/editarEmpleado.php",
    data: $("#editarEmpleado").serialize(),
    dataType: "json",
    success: function (d) {
      if (d == 1) {
        $("#modalEditarEmpleado").modal("hide");
        Swal.fire({
          position: "center",
          icon: "success",
          html: '<img src="../img/expertosip-logo.svg">',
          title: "<br>Empleado Editado Correctamente",
          showConfirmButton: false,
          timer: 2000,
        }).then((result) => {
          window.location = "";
        });
      } else {
        Swal.fire({
          position: "center",
          icon: "error",
          html: '<img src="../img/expertosip-logo.svg">',
          title: "<br>Error al Intentar Editar Empleado",
          showConfirmButton: false,
          timer: 2000,
        });
      }
    },
  });
}

function finalizarEntrega(datos) {
  d = datos.split("||");
  idEntrega = d[0];
  estadoActual = d[1];
  estadoNuevo = d[2];

  if (estadoActual == 1 && estadoNuevo == 3) {
    Swal.fire({
      position: "center",
      icon: "warning",
      html: '<br><img src="../img/expertosip-logo.svg">',
      title: "<br>La entrega no ha sido Firmada aún!!!",
    });
  } else {
    if (estadoNuevo == 3) {
      titulo = "Finalizar";
    } else {
      titulo = "Anular";
    }
    Swal.fire({
      title: titulo + " Entrega",
      html: '<img src="../img/expertosip-logo.svg">',
      showCancelButton: true,
      confirmButtonText: titulo,
      cancelButtonText: "Cancelar",
    }).then((result) => {
      if (result.isConfirmed) {
        let datos = "idEntrega=" + idEntrega + "&estado=" + estadoNuevo;
        $.ajax({
          type: "POST",
          url: "php/cambiarEstadoEntrega.php",
          data: datos,
          dataType: "json",
          success: function (datos) {
            if (datos == 1) {
              Swal.fire({
                position: "center",
                icon: "success",
                html: '<img src="../img/expertosip-logo.svg">',
                title: "<br>El estado ha sido Cambiado",
                showConfirmButton: false,
                timer: 2000,
              }).then((result) => {
                $(".mostrarTabla").load("tablas/tablaEntregas.php");
                window.open("reporteEntrega.php?id=" + idEntrega, "_blank");
              });
            }
          },
        });
      }
    });
  }
}
