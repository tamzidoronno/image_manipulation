<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Image Manipulation</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>

    <!-- Start your project here-->

    
<html lang="en" class="full-height">

<!--Main Navigation-->
<header>

    <nav class="navbar fixed-top navbar-expand-lg navbar-dark rgba-black-light">
        <a class="navbar-brand" href="#"><strong>Image Manipulation</strong></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item-active">
                    <a class="nav-link" href="#">Bulk Image Resize<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">App Icon Creator</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="view intro-2">
        <div class="full-bg-img">
            <div class="mask rgba-black-light flex-center">
                <div class="container">
                    <div class="card">
                        <div class="card-header deep-orange lighten-1 white-text">
        <!--Tabs-->
        <!-- <ul class="nav nav-pills card-header-pills ">
            <li class="nav-item active">
                <a class="nav-link " href="#">Active</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li> -->
<!--        </ul>-->
        <!--/.Tabs-->
    </div>
    <div class="card-body">
        <div class="text-center">
        <h4 class="card-title">Resize JPG, PNG, SVG or GIF by defining new height and width pixels. </h4>
        <p class="card-text">Change image dimensions in bulk</p>
        @yield('content')
        <!-- <a class="btn btn-deep-orange" href="resize.html">UPLOAD PHOTOS</a> -->
        </div>
    </div>
</div>
                </div>
            </div>
        </div>
    </div>

</header>
<!--Main Navigation-->


                    
    <!-- /Start your project here-->

    <!-- SCRIPTS -->
    <!-- JQuery -->
    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
</body>

</html>
