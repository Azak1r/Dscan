<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/images/favicon.ico">    
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Leviathan - DScan Tool</title>

    <!-- Bootstrap core CSS -->
    <link href="css/app.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/custom.css" rel="stylesheet">
  </head>

  <body>

    <header>
      <!-- Fixed navbar -->
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="#">Leviathan - DScan Tool</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">New DScan<span class="sr-only">(current)</span></a>
            </li>
          </ul>
          <form class="form-inline mt-2 mt-md-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
      </nav>
    </header>

    <!-- Begin page content -->
    <div role="main" class="container">
      <form class="text-center" method="post">
        <div class="form-group">
          <label for="exampleFormControlTextarea1">Paste your DScan here...</label>
          <textarea class="form-control" id="exampleFormControlTextarea1" rows="15"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit DScan</button>
      </form>
    </div>

    <footer class="footer">
      <div class="container">
        <p><span class="text-muted">&copy; 2018 <a href="https://github.com/Azak1r">Joery Pigmans</a>. Although this is a free app, you're welcome to send donations through <a href="https://paypal.me/joerypigmans">Paypal</a> if you'd like to.</span></p>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>