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

    <div class="pull-right" style="padding: 10px">
        
               <b>Choose Language</b>
                        <select id="dynamic_select" class="form-control" style="display: initial;width: 120px;" data-show-icon="true">
                          <option value="{{ url('locale/en') }}" @if(!empty(Session::get('locale')) && Session::get('locale')=="en") selected @endif  > English </option>
                          <option value="{{ url('locale/sh') }}" @if(!empty(Session::get('locale')) && Session::get('locale')=="sh") selected @endif  >Swahili</option>
                          <option value="{{ url('locale/hi') }}" @if(!empty(Session::get('locale')) && Session::get('locale')=="hi") selected @endif  >हिंदी</option>
                        </select>
    </div>

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
            $(function(){
              // bind change event to select
              $('#dynamic_select').on('change', function () {
                  var url = $(this).val(); // get selected value
                  if (url) { // require a URL
                      window.location = url; // redirect
                  }
                  return false;
              });
            });
        </script>
        @stack('scripts')
    </body>
</html>