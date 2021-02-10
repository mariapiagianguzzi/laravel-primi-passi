<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        
    </head>
    <body>
            <header>
                <nav>
                    <a href="{{ url('/') }}">Home</a>
                </nav>
            </header>
            <main>
            <div class="container">
            <h3>Melagrana Handmade</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum neque officiis est culpa maxime amet, quia quibusdam cumque consequuntur, exercitationem ipsum, voluptatum reprehenderit illum asperiores? Eaque tenetur dicta labore eius.</p>
            </div>
            </main>
            <footer>
                <div class="container">
                <a href="{{ url('/about') }}">About</a>
                <a href="{{ url('/about') }}">Contact</a>
                <a href="mailto:text@gmail.com">Email</a>
                </div>
            </footer>
    </body>
</html>
