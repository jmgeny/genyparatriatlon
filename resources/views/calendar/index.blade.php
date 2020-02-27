@extends('layouts.calendar')

@section('title','Calendario')

@section('content')
  <div class="container">    
    <div class="row">
      <div class="col-md-8" style="margin-top: 4em">
        <h1>Calendario SIN carreras</h1>
      </div>
      <div class="col-md-4">
        <a href="{{ url('/') }}"><img src="../img/GenyParatriatlonTransparente.png" alt=""></a>
      </div>
    </div>

    <p class="lead">
      <hr>

      <div class="row header-calendar"  >
      <a href="{{ url('Evento/form') }}" class="btn btn-primary">Crear Evento</a>

        <div class="col" style="display: flex; justify-content: space-between; padding: 10px;">
          <a  href="{{ asset('/calendar/') }}/<?= $data['last']; ?>" style="margin:10px;">
            <i class="fas fa-chevron-circle-left" style="font-size:30px;color:white;"></i>
          </a>
          <h2 style="font-weight:bold;margin:10px;"><?= $mespanish; ?> <small><?= $data['year']; ?></small></h2>
          <a  href="{{ asset('/calendar/') }}/<?= $data['next']; ?>" style="margin:10px;">
            <i class="fas fa-chevron-circle-right" style="font-size:30px;color:white;"></i>
          </a>
        </div>

      </div>
      <div class="row">
        <div class="col header-col">Lunes</div>
        <div class="col header-col">Martes</div>
        <div class="col header-col">Miercoles</div>
        <div class="col header-col">Jueves</div>
        <div class="col header-col">Viernes</div>
        <div class="col header-col">Sabado</div>
        <div class="col header-col">Domingo</div>
      </div>
      <!-- inicio de semana -->
      @foreach ($data['calendar'] as $weekdata)
      <div class="row">
        <!-- ciclo de dia por semana -->
        @foreach  ($weekdata['datos'] as $dayweek)

        @if  ($dayweek['mes']==$mes)

{{--           @if ($dayweek['dia']==$hoy)
            <div class="col box-day" style="background-color: #fbba28">
              {{ $dayweek['dia']  }}
            </div>          
          @else  --}}
            <div class="col box-day">
              {{ $dayweek['dia']  }}
            </div>
          {{-- @endif --}}
        @else
        <div class="col box-dayoff">
        </div>
        @endif
        @endforeach
      </div>
      @endforeach

    </div> <!-- /container -->

@endsection