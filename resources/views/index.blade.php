@extends('layouts.main')

@section('title', 'Geny')

@section('content')
<div class="index">
{{-- header --}}
	@include('header')

	@include('sponsor')
	
</div>
@endsection