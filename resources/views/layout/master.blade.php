<!DOCTYPE html>
<html>
<head>
	<title>@yield("title")</title>

	<!-- *****************Bootstrap CSS********************* -->

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

	<!-- *****************Bootstrap Jquery********************* -->

	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

	<!-- *****************Font Awesome cdn********************* -->

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/	ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<!-- *****************Data Table CSS********************* -->

	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
	<link rel="stylesheet" type="text/css" href="
https://cdn.datatables.net/select/1.3.1/css/select.dataTables.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.6.2/css/buttons.dataTables.min.css">



	<!-- *****************Sweet Alert cdn********************* -->

	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.js">

	 <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.min.js">





</head>
<body>

	<br>

	@yield('content');

	@include('sweetalert::alert');

<!-- // ************Export To Excel Code*************** -->

	<script>
			$(document).ready(function() {
	    $('#example').DataTable( {
	        dom: 'Bfrtip',
	        buttons: [

	        {
	                extend: 'excelHtml5',
	                exportOptions: {
	                    columns: '0,1,2,3,4,5'
	                }
	            },
	          
	        ],
	        select: {

	        	style:'multi'
	        }
	    } );
	} );
		</script>


		
	<!-- *****************Sweet Alert JS********************* -->

	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


	<!-- *****************Data Table JS********************* -->

	<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.js"></script>

	<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>

	<script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>

	<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.2/js/dataTables.buttons.min.js"></script>

	<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.flash.min.js"></script>

	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>

	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>

	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js
"></script>

<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.html5.min.js
"></script>

<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.print.min.js
"></script>

<script type="text/javascript" src="https://cdn.datatables.net/select/1.3.1/js/dataTables.select.min.js
"></script>
	

</body>
</html>