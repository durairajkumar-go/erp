<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>VYANA ERP</title>

        <!-- Start Global Mandatory Style
        =====================================================================-->
        <link href="{{ url('assets/dist/css/base.css') }}" rel="stylesheet" type="text/css"/>
        <!-- End Global Mandatory Style
        =====================================================================-->
        <!-- Theme style -->
        <link href="{{ url('assets/dist/css/component_ui.min.css') }}" rel="stylesheet" type="text/css"/>
        <!-- Theme style rtl -->
        <!--<link href="{{ url('assets/dist/css/component_ui_rtl.css') }}" rel="stylesheet" type="text/css"/>-->
        <!-- Custom css -->
        <link href="{{ url('assets/dist/css/custom.css') }}" rel="stylesheet" type="text/css"/>

      <!-- jQuery -->
        <script src="{{ url('assets/plugins/jQuery/jquery-1.12.4.min.js') }}" type="text/javascript"></script>

        <!-- End Theme Layout Style
        =====================================================================-->

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
        <style>
        </style>
    </head>
    <body>

     <!-- Content Wrapper -->
        <div class="login-wrapper">
            <div class="container-center">

            @yield('content')

        </div>
        </div>
        <!-- jquery-ui -->
        <script src="{{ url('assets/plugins/jquery-ui-1.12.1/jquery-ui.min.js') }}" type="text/javascript"></script>
        <!-- Bootstrap js -->
        <script src="{{ url('assets/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>
        <!-- End Theme label Script
        =====================================================================-->
        <script>
            $(document).ready(function () {

                "use strict"; // Start of use strict

                $('#dataTableExample1').DataTable({
                    "dom": "<'row'<'col-sm-6'l><'col-sm-6'f>>t<'row'<'col-sm-6'i><'col-sm-6'p>>",
                    "lengthMenu": [[6, 25, 50, -1], [6, 25, 50, "All"]],
                    "iDisplayLength": 6
                });

                $("#dataTableExample2").DataTable({
                    dom: "<'row'<'col-sm-4'l><'col-sm-4 text-center'B><'col-sm-4'f>>tp",
                    "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
                    buttons: [
                        {extend: 'copy', className: 'btn-sm'},
                        {extend: 'csv', title: 'ExampleFile', className: 'btn-sm'},
                        {extend: 'excel', title: 'ExampleFile', className: 'btn-sm'},
                        {extend: 'pdf', title: 'ExampleFile', className: 'btn-sm'},
                        {extend: 'print', className: 'btn-sm'}
                    ]
                });

            });

		   function clickAndDisable(link) {
		     // disable subsequent clicks
		     link.onclick = function(event) {
		        event.preventDefault();
		     }
		   } 
			       
		$(window).load(function() {
		  $("body").removeClass("preload");
		});

$(document).ready(function(){
$('html, body').animate({
        scrollTop: $(".navbar-default").offset().top
    }, 2000);
});

        </script>

        @stack('scripts')
    </body>
</html>