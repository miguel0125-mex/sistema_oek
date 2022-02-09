window.addEventListener('DOMContentLoaded', event => {
    // Simple-DataTables
    // https://github.com/fiduswriter/Simple-DataTables/wiki
    /*
        function dataTables() {
            new simpleDatatables.DataTable("#datatablesSimple", {
                columns: [{
                    select: [2, 3],
                    hidden: true
                }]
            })
        }
        dataTables()*/

    const datatablesSimple = document.getElementById('datatablesSimple');

    if (datatablesSimple) {
        new simpleDatatables.DataTable(datatablesSimple, {
            columns: [{
                select: [8, 9, 10, 11, 12, 13, 14, 15],
                hidden: true,
            }]
        });
    }
});