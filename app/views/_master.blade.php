<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>@yield('title',"Developer's Best Friend")</title>
   	<link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
	@yield('head')
</head>


<body id="page-top" class="index">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="index">Home</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="/generate_ipsum">Lorem Ipsum Generator</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="/generate_user">Random User Generator</a>
                    </li>
                </ul>
            </div>
        </div>
	@yield('Nav')
    </nav>
<div>
	@yield('header')
</div>

	<div>

@yield('content')


 	</div>

</body>


<footer>
  <!-- jQuery, Bootsrap, JavaScript-->
    <script src="js/jquery-1.11.0.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/cbpAnimatedHeader.js"></script>
    <script src="js/agency.js"></script>

    @yield('footer')
</footer>

</html>