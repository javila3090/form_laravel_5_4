<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Prueba </title>
        <link rel="stylesheet" href="{{ URL::asset('assets/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('assets/css/datatables.min.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('assets/css/styles.css') }}">
        <!-- scripts -->
        <script>
            window.Laravel =
            <?php echo
            json_encode([
                'csrfToken' => csrf_token(),
            ]); ?>
        </script>
    </head>
    
    <body>
    <div id="navbar-main">
        <!-- Fixed navbar -->
        <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li> <a href="{{ route('/') }}">Registro</a></li>
                        <li> <a href="{{ route('personas/lista') }}">Consulta</a></li>
                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </div>
    </div>
    <div class="container">
        <div class="main_container">

            <!-- page content -->
            @yield('content')

            <!-- /page content -->

            <!-- footer content -->
            <footer>
                <div class="pull-right">
                    Realizado por <a href="https://julioavila.com.ve" target="_blank">Julio Avila</a>
                </div>
                <div class="clearfix"></div>
            </footer>
            <!-- /footer content -->
        </div>
    </div>
    <script type="text/javascript" src="{{ asset('assets/js/jquery-3-1.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/dataTables.bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/datatables.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/custom.js') }}"></script>
    </body>
</html>