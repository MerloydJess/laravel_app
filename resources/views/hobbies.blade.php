<!-- resources/views/hobbies.blade.php -->


    <div class="container">
        <h1>Hobbies</h1>
        @foreach($hobbies as $hobby)
            <h2>{{ $hobby['name'] }}</h2>
            <p>{{ $hobby['description'] }}</p>
        @endforeach
        <br>
        <a href="{{ route('about') }}" class="btn btn-primary">About Me</a>
        <a href="{{ route('skills') }}" class="btn btn-primary">Skills</a>
    </div>

