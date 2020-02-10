<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Pondok Schooling Daarul Ilmi </title>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <meta name="keywords" content="Informing Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <!-- Script -->
    <script>
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- //Meta tag Keywords -->
    <!-- Custom-Files -->
    <link rel="stylesheet" href="{{url('/assets/web/css/bootstrap.css')}}">
    <!-- Bootstrap-Core-CSS -->
    <link rel="stylesheet" href="{{url('/assets/web/css/style.css')}}" type="text/css" media="all" />
    <!-- Style-CSS -->
    <!-- font-awesome-icons -->
    <link href="{{url('/assets/web/css/font-awesome.css')}}" rel="stylesheet">
    <!-- //font-awesome-icons -->
    <!-- /Fonts -->
    <link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,600,700" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700" rel="stylesheet">
    <!-- //Fonts -->
</head>

<body>
    <!-- main-content -->
    <div class="main-content" id="home">
        <div class="layer">
            <!-- header -->
            @include('company.header')
            <!-- //header -->
            <div class="container">
                <!-- /banner -->
                <div class="banner-info-w3layouts text-center">
                    <h3>Selamat Datang di PSDI</h3>
                    <div class="read-more">
                        <a href="{{url('/home')}}" class="read-more scroll">Home </a> </div>
                </div>
                
            </div>
            <!-- //banner -->
        </div>
    </div>
    <!--// main-content -->
</body>

</html>
