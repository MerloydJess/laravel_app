<!-- resources/views/about.blade.php -->

@extends('layouts.app') {{-- Assuming you have a layout file --}}

@section('content')
    <div class="container">
        <h1>About Me</h1>
        <p>
            Hi, I'm Merloyd Jess Aroco
        </p>
        <p>
            I love beef and I'm from Acop, Tublay, Benguet
        </p>
        <br>
        <a href="{{ route('skills') }}" class="btn btn-primary">Skills</a>
        <a href="{{ route('hobbies') }}" class="btn btn-primary">Hobbies</a>
    </div>
@endsection
