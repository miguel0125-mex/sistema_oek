$('#btnNuevo').click(function() {
    $("#addnew").modal('show');
    $("addnew").trigger('reset');
    //id = null;
});

$('.close').click(function() {
    $("#addnew").modal('hide');
});


/*
$(document).ready(function() {
    //Enviar datos
    $("formAdd").submit(function(e) {
        e.preventDefault();
        id = $.trim($('#id').val());
        nombre = $.trim($('#nombre').val());
        aPaterno = $.trim($('#aPaterno').val());
        aMaterno = $.trim($('#aMaterno').val());
        edad = $.trim($('#edad').val());
        fNacimiento = $.trim($('#fNacimiento').val());
        genero = $.trim($('#genero').val());
        curp = $.trim($('#curp').val());
        rfc = $.trim($('#rfc').val());
        direccion = $.trim($('#direccion').val());
        estado = $.trim($('#estado').val());
        provincia = $.trim($('#provincia').val());
        cPostal = $.trim($('#cPostal').val());
        telefono = $.trim($('#telefono').val());
        correo = $.trim($('#correo').val());
        escolaridad = $.trim($('#escolaridad').val());
        numEmpleado = $.trim($('#numEmpleado').val());
        puesto = $.trim($('#puesto').val());

        $.ajax({
            url: "../bd-personal/crud.php",
            type: "POST",
            datatype: "json",
            data: {
                id: id,
                numEmpleado: numEmpleado,
                nombre: nombre,
                aPaterno: aPaterno,
                aMaterno: aMaterno,
                edad: edad,
                fNacimiento: fNacimiento,
                genero: genero,
                curp: curp,
                rfc: rfc,
                direccion: direccion,
                estado: estado,
                provincia: provincia,
                cPostal: cPostal,
                telefono: telefono,
                correo: correo,
                escolaridad: escolaridad,
                puesto: puesto,
            },
            success: function(data) {
                if (data == "") {
                    Swall.fire({
                        icon: "error",
                        title: "Datos incompletos, intente de nuevo",
                    })
                } else {
                    Swall.fire({
                        icon: "success",
                        title: "Empleado añadido satisfactoriamente",
                        confirmButtonColor: "#3085d6",
                        confirmButtonText: "OK"
                    }).then((result) => {
                        if (result.value) {
                            window.location.href = "../dashboard/verEmpleados.php";
                        }
                    })
                }
            }
        });
    });
});
*/