var opcion, id;

$btnEnviar = $("#btnEnviar").click(function(e) {
    e.preventDefault();
    opcion = 1;
    //alert("hola");
    //$id = $.trim($("#id").val());
    $nombre = $.trim($("#nombre").val());
    $aPaterno = $.trim($("#aPaterno").val());
    $aMaterno = $.trim($("#aMaterno").val());
    $edad = $.trim($("#edad").val());
    $fNacimiento = $.trim($("#fNacimiento").val());
    $genero = $.trim($("#genero").val());
    $curp = $.trim($("#curp").val());
    $rfc = $.trim($("#rfc").val());
    $direccion = $.trim($("#direccion").val());
    $estado = $.trim($("#estado").val());
    $provincia = $.trim($("#provincia").val());
    $cPostal = $.trim($("#cPostal").val());
    $telefono = $.trim($("#telefono").val());
    $email = $.trim($("#email").val());
    $escolaridad = $.trim($("#escolaridad").val());

    $.ajax({
        url: "../bd-personal/crud.php",
        type: "POST",
        datatype: "json",
        data: {
            id: id,
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
            email: email,
            escolaridad: escolaridad,
            opcion: opcion
        },
        success: function(data) {
            if (data == "null") {
                Swall.fire({
                    icon: "error",
                    title: "Error al guardar los datos",
                });
            } else {
                Swal.fire({
                    icon: "success",
                    title: "Se guardo con exito",
                    confirmButtonColor: "#3085d6",
                    confirmButtonText: "Ingresar"
                }).then((result) => {
                    if (result.value) {
                        window.location.href = "../dashboard/agregarEmpleados.php";
                    }
                });
            }
            $("#tbPersonal").ajax.reload(null, false);
        }
    })

});