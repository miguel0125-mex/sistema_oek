$('#btnNuevo').click(function() {
    if ($("#edit")) {
        $('#edit').attr("id", "addnew");
        $('edit-btn').attr('name', 'add');
    }
    $("#addnew").modal('show');
    $("addnew").trigger('reset');
    $(".modal-title").text("Agregar Empleado");
    $(".modal-header").css("background-color", "#2FF058");
    $(".modal-header").css("color", "#fff");
    $("#numEmpleado").val('');
    $("#nombre").val('');
    $("#aPaterno").val('');
    $("#aMaterno").val('');
    $("#edad").val('');
    $("#telefono").val('');
    $("#correo").val('');
    $("#fNacimiento").val('');
    $("#genero").val('');
    $("#direccion").val('');
    $("#estado").val('');
    $("#provincia").val('');
    $("#cPostal").val('');
    $("#curp").val('');
    $("#rfc").val('');
    $("#escolaridad").val('');
    $("#puesto").val('');

    //id = null;
});

$('.close').click(function() {
    $("#addnew").modal('hide');
    $("#edit").modal('hide');
});

$(document).on('click', '.btnEditar', function() {
    $("#addnew").attr('id', 'edit');
    $('add').attr('name', 'edit-btn');
    $("#edit").modal('show');
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
    genero = $.trim(fila.find('td:eq(8)').text());
    domicilio = $.trim(fila.find('td:eq(9)').text());
    estado = $.trim(fila.find('td:eq(10)').text());
    provincia = $.trim(fila.find('td:eq(11)').text());
    cPostal = $.trim(fila.find('td:eq(12)').text());
    curp = $.trim(fila.find('td:eq(13)').text());
    rfc = $.trim(fila.find('td:eq(14)').text());
    escolaridad = $.trim(fila.find('td:eq(15)').text());
    puesto = $.trim(fila.find('td:eq(16)').text());
    //puesto = $.trim(fila.find('td:eq(7)').text());
    $("#numEmpleado").val(numEmpleado);
    $("#nombre").val(nombre);
    $("#aPaterno").val(aPaterno);
    $("#aMaterno").val(aMaterno);
    $("#edad").val(edad);
    $("#telefono").val(telefono);
    $("#correo").val(correo);
    $("#fNacimiento").val(fNacimiento);
    $("#genero").val(genero);
    $("#direccion").val(domicilio);
    $("#estado").val(estado);
    $("#provincia").val(provincia);
    $("#cPostal").val(cPostal);
    $("#curp").val(curp);
    $("#rfc").val(rfc);
    $("#escolaridad").val(escolaridad);
    $("#puesto").val(puesto);
    //console.log(puesto);
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