<script>
    $(document).ready(function() {
        $('#table').DataTable({
            "language": {
        "lengthMenu": "Mostrar "+
                    `<select>
                    <option value ='5'>5</option>
                    <option value ='10'>10</option>
                    <option value ='25'>25</option>
                    <option value ='50'>50</option>
                    <option value ='100'>100</option>
                    <option value ='-1'>ALL</option>
                    </select>`+
                    " registro por pagina",
        "zeroRecords": "Nada encontrado",
        "info": "Mostrando la pagina _PAGE_ de _PAGES_",
        "infoEmpty": "No se encuentran registros disponibles",
        "infoFiltered": "(filtrado de _MAX_ registros totales)",
        "search": "Buscar:",
        "paginate":{
            'next':'siguiente',
            'previous':'anterior'
        }
        },    responsive: true
        });
    });
</script>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap4.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

