@extends('layouts.principal')
@section('title','Geny Paratriatlon')
@section('content')
    <!-- Navigation -->
    @include('navbar')
    <!-- Header -->
    @include('header')
    {{-- sponsor --}}
    @include('sponsor')
    <!-- Portfolio -->
    @include('portfolio')
    {{-- About --}}
    @include('about')
    <!-- Contact Section -->
    @include('contact')
    <!-- Footer -->
    @include('footer')

@endsection    