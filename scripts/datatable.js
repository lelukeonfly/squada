$(document).ready(function() {
    var table = $('#player').DataTable( {
        lengthChange: false,
        buttons: [ 'copy', 'excel', 'pdf', 'colvis' ]
    } );
 
    table.buttons().container()
        .appendTo( '#player_wrapper .col-md-6:eq(0)' );
} );