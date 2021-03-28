@extends('layout')

@section('title', __('Contact'))

@section('content')
    <h1>Contact</h1>
    {{ var_dump($errors->any()) }}
    <form method="POST" action="{{ route('contact') }}">
        @csrf
        <input name="name" placeholder="Nombre..." value="Daniel"><br>
        <input type="email"  name="email" placeholder="Email..." value="daniel@gmail.com"><br>
        <input name="subject" placeholder="Asunto..." value='Asunto de prueba'><br>
        <textarea name="content" placeholder="Mensaje">Mensaje de prueba</textarea><br>
        <button>Enviar</button>
    </form>
@endsection