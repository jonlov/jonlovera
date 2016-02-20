<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <title>Example Hangout App - Jonathan Lovera</title>
    <!-- CSS  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection" />
    <link href="/css/style.css" type="text/css" rel="stylesheet" media="screen,projection" />
</head>

<body>
    <nav class="green lighten-1" role="navigation">
        <div class="nav-wrapper container"><a id="logo-container" href="#" class="brand-logo">Hangout App</a>
        </div>
    </nav>
    <div class="section no-pad-bot" id="index-banner">
        <div class="container">
            <br>
            <br>
            <h1 class="header center green-text">Example Hangout App</h1>
            <div class="row center">
                <script src="https://apis.google.com/js/platform.js" async defer></script>
                <g:hangout render="createhangout" data-render="createhangout"
    data-initial_apps="[{ app_id : 'portafolio-1227', 'app_type' : 'ROOM_APP' }]"></g:hangout>
            </div>
            <br>
            <br>
        </div>
    </div>
    <footer class="page-footer p-t-n m-t-40 white">
        <div class="footer-copyright">
            <div class="container">
                <span class="right black-text">
                    Made with love by <a class="green-text" href="https://github.com/JonLovera">Jonathan Lovera</a>
                </span>
            </div>
        </div>
    </footer>
    <!--  Scripts-->
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="/js/materialize.js"></script>
    <script src="/js/init.js"></script>
</body>

</html>