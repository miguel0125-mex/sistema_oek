$('#btnNuevo').click(function() {
    $("#addnew").modal('show');
    $("addnew").trigger('reset');
    //id = null;
});

$('.close').click(function() {
    $("#addnew").modal('hide');
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

tablaDominios = $('#tbAsistencia').DataTable({
    'language': {
        "url": "https://cdn.datatables.net/plug-ins/1.11.3/i18n/es_es.json"
    },

    "reponsive": true
});