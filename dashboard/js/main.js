var fila, id;

$('#btnNuevo').click(function() {
    $("#addnew").modal('show');
    $("addnew").trigger('reset');
    //id = null;
});

$('.close').click(function() {
    $("#addnew").modal('hide');
});

$(document).on('click', '.btnEditar', function() {
    $("#addnew").modal('show');
    $(".modal-title").text("Editar Empleado");
    $(".modal-header").css("background-color", "#007bff");
    $(".modal-header").css("color", "white");
    //$("addnew").trigger('reset');
    //id = null;
    fila = $(this).closest('tr');
    numEmpleado = parseInt(fila.find('td:eq(0)').text());
    nombre = $.trim(fila.find('td:eq(1)').text());
    aPaterno = $.trim(fila.find('td:eq(2)').text());
    aMaterno = $.trim(fila.find('td:eq(3)').text());
    edad = parseInt(fila.find('td:eq(4)').text());
    telefono = parseInt(fila.find('td:eq(5)').text());
    correo = $.trim(fila.find('td:eq(6)').text());
    fNacimiento = $.trim(fila.find('td:eq(7)').text());
    //puesto = $.trim(fila.find('td:eq(7)').text());
    $("#numEmpleado").val(numEmpleado);
    $("#nombre").val(nombre);
    $("#aPaterno").val(aPaterno);
    $("#aMaterno").val(aMaterno);
    $("#edad").val(edad);
    $("#telefono").val(telefono);
    $("#correo").val(correo);
    $("#fNacimiento").val(fNacimiento);
    console.log(nombre);
});


$("#formTxt").submit(function(e) {
    e.preventDefault();
    //alert("se presiono el boton");
    var formData = new FormData();
    var fileTxt = $("#file")[0].files[0];
    formData.append('file', fileTxt);
    $.ajax({
        url: "bd-personal/import_asistencia.php",
        type: "POST",
        datatype: "json",
        data: formData,
        cache: false,
        contentType: false,
        processData: false,
        success: function(data) {
            alert(data);
        }
    });
    //return false;
});

/*
tablaDominios = $('#tbAsistencia').DataTable({
    'language': {
        "url": "https://cdn.datatables.net/plug-ins/1.11.3/i18n/es_es.json"
    },

    "reponsive": true
});*/