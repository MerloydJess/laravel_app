<!-- resources/views/skills.blade.php -->


    <div class="container">
        <h1>Skills</h1>
        @foreach($skills as $skillCategory)
            <h2>{{ $skillCategory['name'] }}</h2>
            <ul>
                @foreach($skillCategory['items'] as $item)
                    <li>{{ $item }}</li>
                @endforeach
            </ul>
        @endforeach
        <br>
        <a href="{{ route('about') }}" class="btn btn-primary">About Me</a>
        <a href="{{ route('hobbies') }}" class="btn btn-primary">Hobbies</a>
    </div>

