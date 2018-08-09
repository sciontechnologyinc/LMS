<!doctype html>
<html class="no-js" lang=""> 
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Administrator</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="{!! asset('apple-icon.png') !!}">
    <link rel="shortcut icon" href="{!! asset('favicon.ico') !!}">
    <link rel="stylesheet" href="{!! asset('assets/css/normalize.css') !!}">
    <link rel="stylesheet" href="{!! asset('assets/css/style.css') !!}">
    <link rel="stylesheet" href="{!! asset('assets/css/bootstrap.min.css') !!}">
    <link rel="stylesheet" href="{!! asset('assets/css/font-awesome.min.css') !!}">
    <link rel="stylesheet" href="{!! asset('assets/css/themify-icons.css') !!}">
    <link rel="stylesheet" href="{!! asset('assets/css/flag-icon.min.css') !!}">
    <link rel="stylesheet" href="{!! asset('assets/css/cs-skin-elastic.css') !!}">
    <!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
    <link rel="stylesheet" href="{!! asset('assets/scss/style.css') !!}">
    <link href="{!! asset('assets/css/lib/vector-map/jqvmap.min.css') !!}" rel="stylesheet">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

</head>
<body>
@yield('sidepanel')
    <!-- Right Panel -->
    <div id="right-panel" class="right-panel">

@yield('header')

<div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>@yield('title')</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li class="active">@yield('title')</li>
                        </ol>
                    </div>
                </div>
        </div>
</div>

@yield('content')
      
    </div><!-- /#right-panel -->

    <!-- Right Panel -->

    <script src="{!! asset('assets/js/vendor/jquery-2.1.4.min.js') !!}"></script>
    <script src="{!! asset('https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js') !!}"></script>
    <script src="{!! asset('assets/js/plugins.js') !!}"></script>
    <script src="{!! asset('assets/js/main.js') !!}"></script>
    <script src="{!! asset('assets/js/lib/chart-js/Chart.bundle.js') !!}"></script>
    <script src="{!! asset('assets/js/dashboard.js') !!}"></script>
    <script src="{!! asset('assets/js/widgets.js') !!}"></script>
    <script src="{!! asset('assets/js/lib/vector-map/jquery.vmap.js') !!}"></script>
    <script src="{!! asset('assets/js/lib/vector-map/jquery.vmap.min.js') !!}"></script>
    <script src="{!! asset('assets/js/lib/vector-map/jquery.vmap.sampledata.js') !!}"></script>
    <script src="{!! asset('assets/js/lib/vector-map/country/jquery.vmap.world.js') !!}"></script>
    <script src="{!! asset('assets/js/custom.js') !!}"></script>
</body>
</html>
