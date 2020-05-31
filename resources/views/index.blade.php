@extends('layouts.main')

@section('title', 'Geny')

@section('content')

{{-- header --}}
	@include('header')

	
	@include('noticias')
	{{-- @include('listaCarreras') --}}
{{-- <div class="text-center">
	
	<a href="{{ url('/Evento/index') }}" class="btn btn-primary" target="new">Eventos</a>
	<a href="{{ url('/calendar') }}" class="btn btn-primary" target="new">Calendario</a>

</div> --}}
	
	@include('sponsor')

	@include('footer')		

@endsection