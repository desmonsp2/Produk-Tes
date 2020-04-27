<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Dashboard | Admin</title>
            <!-- Bootstrap core CSS -->
            <link href="/css/app.css" rel="stylesheet">
            <link href="/css/custom.css" rel="stylesheet">
        </head>
        <body>
        <nav class="navbar navbar-light fixed-top bg-light flex-md-nowrap p-0 shadow">
            <a class="navbar-brand px-5 py-2" href="#">
                <img src="img/worker.png" width="30" height="30" alt="">
                <span class="navbar-brand mb-0 h1">Admin Balooney</span>
            </a>
            <ul class="navbar-nav px-5">
                <button type="button" class="btn btn-danger" href="#" but>Close</button>
            </ul>
        </nav>
        <div class="jumbotron">
            <div class="row">
                <main role="main" class="col-md-8 d-none d-md-block bg-light">
                    @yield('content')
                </main>
                <div class="col-md-3 ml-sm-auto col-lg-10 px-4 bg-light">
                    @yield('sidebar')
                </div>
        </div>
        <footer id="footer" class="text-center">
                <p class="text-muted align-center">Copyright 2020 &copy; Desmon Efin Susanto </p>
        </footer>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script>window.jQuery || document.write('<script src="/js/jquery-slim.min.js"><\/script')</script>
        <script src="/js/popper.min.js"></script>
        <script src="/js/bootstrap.min.js"></script>
        </body>
</html>
