<script src="{{ asset('js/jquery-1.11.1.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/chart.min.js') }}"></script>
<script src="{{ asset ('js/easypiechart.js')}}"></script>
<script src="{{ asset ('js/easypiechart-data.js')}}"></script>
<script src="{{ asset('js/bootstrap-datepicker.js') }}"></script>
<script src="{{ asset('js/custom.js') }}"></script>
<script src="{{ asset('datatables/datatables.js') }} "></script>
<script>
    $(document).ready( function () {
        $('#dataTable').DataTable();
    } );
    $('#dataTable').DataTable( {
        responsive: true
    } );
</script>


