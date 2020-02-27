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

<div class="card">
  <div class="card-header">
    <h1>Crear Evento</h1>
    
      <a class="btn btn-default"  href="{{ asset('/Evento/index') }}">Atras</a>
      <hr>

      @if (count($errors) > 0)
      <div class="alert alert-danger">
       <button type="button" class="close" data-dismiss="alert">×</button>
       <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
      </ul>
      </div>
    @endif
    @if ($message = Session::get('success'))
    <div class="alert alert-success alert-block">
      <button type="button" class="close" data-dismiss="alert">×</button>
      <strong>{{ $message }}</strong>
    </div>
    @endif
   </div> 
    <div class="card-body">
<div class="row">
    <div class="col-md-8 offset-md-2">
      <form action="{{ asset('/Evento/create/') }}" method="POST">
        @csrf
        <div class="fomr-group">
          <label>Titulo</label>
          <input type="text" class="form-control" name="title">
        </div>
        <div class="fomr-group">
          <label>Descripcion del Evento</label>
          <input type="text" class="form-control" name="description">
        </div>
        <div class="fomr-group">
          <label>Fecha</label>
          <input type="date" class="form-control" name="date">
        </div>
        <br>
        <input type="submit" class="btn btn-info" value="Guardar">
      </form>
    </div>
</div>
</div>
</div>
    <!-- inicio de semana -->


  </div> <!-- /container -->

</body>
</html>