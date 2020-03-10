<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Weather App</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <link href="{{ asset('css/app.css') }}" rel="stylesheet">


        <!-- Styles -->
      
    </head>
    <body class="bg-blue-200">
       
        <div id="app" class="flex justify-center pt-20">
            <weather-app></weather-app>
        </div>

        
        <script src=" https://gitcdn.link/cdn/darkskyapp/skycons/master/skycons.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/places.js@1.18.1"></script>
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
