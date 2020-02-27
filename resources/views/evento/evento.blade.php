<html>
<head>
  <title></title>
  <meta content="">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Exo&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <style>
    body{
      font-family: 'Exo', sans-serif;
    }
    .header-col{
      background: #E3E9E5;
      color:#536170;
      text-align: center;
      font-size: 20px;
      font-weight: bold;
    }
    .header-calendar{
      background: #EE192D;color:white;
    }
    .box-day{
      border:1px solid #E3E9E5;
      height:150px;
    }
    .box-dayoff{
      border:1px solid #E3E9E5;
      height:150px;
      background-color: #ccd1ce;
    }
  </style>

</head>
<body>

  <div class="container">
    <p class="lead">
      <hr>
      <div class="row align-self-center">
      <div class="col-md-8 offset-md-2">
        <div class="card">
          <div class="card-header">Evento</div>
          <div class="card-body">
                <form action="{{ asset('/Evento/create/') }}" method="post">
                  <div class="fomr-group">
                    <h4>{{ $event->title }}</h4>
                  </div>
                  <div class="fomr-group">
                    <h4>{{ $event->description }}</h4>
                  </div>
                  <div class="fomr-group">
                    <h4>{{ $event->date }}</h4>
                  </div>
                  <br>
                  <a class="btn btn-info"  href="{{ asset('/Evento/index') }}">Atras</a>
                </form>
          </div>      
        </div>
      </div>
      </div>

      <!-- inicio de semana -->

    </div> <!-- /container -->

    <!-- Footer -->
    <footer class="page-footer font-small blue pt-4">
      <!-- Copyright -->
      <div class="footer-copyright text-center py-3">
       
      </div>
      <!-- Copyright -->
    </footer>
    <!-- Footer -->

  </body>
  </html>