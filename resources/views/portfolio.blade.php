@extends('layout')

@section('title', __('Portafolio'))

@section('content')
    <h1>Portafolio</h1>

    <ul>
    @isset($portfolio)
        @forelse($portfolio as $portfolioItem)

        <li>{{ $portfolioItem['title'] }}</li>

        @empty

        <li>No hay proyectos para mostrar</li>

        @endforelse
        
    @endisset
    </ul>
    
@endsection