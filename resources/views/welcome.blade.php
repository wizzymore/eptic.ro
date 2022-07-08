<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>EPTIC</title>

        <!-- Styles -->
        @vite('resources/css/app.css')
    </head>
    <body class="antialiased">
    <div class="container">
        <div class="logo">
            <img src="{{ asset('logo.svg') }}" alt="EPTIC Logo" width="300" height="100" />
        </div>
        <div class="repoContainer">
            @foreach($repos as $repo)
                <div class="repo">
                    <div>
                        <a href="{{ $repo['html_url'] }}" class="title">
                            {{ $repo['full_name'] }}
                        </a>
                        <p class="description">{{ $repo['description'] }}</p>
                    </div>
                    <div class="languageContainer">
                        <span class="language">{{ $repo['language'] }}</span>
                        <span class="license">{{ $repo['license']['name'] }}</span>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    </body>
</html>
