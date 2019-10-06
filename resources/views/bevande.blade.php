

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <title>Bevande</title>
</head>
<body>

        
        
    <main>

        @foreach ($values as $value)
        <div class="box">
           <p>  {{ $value -> nome}} <br>
                {{ $value -> marca}}  <br>
                {{ $value -> prezzo}}        
          </p>
        </div>                   
        @endforeach

        <div class="contenitore2"></div>
    <div class="box"> <p> {{ $min }} </p> </div>
    <div class="box"> <p> {{ $max }} </p> </div>
    <div class="box"> <p> {{ $avg }} </p> </div>
        
    </main>


      
    
</body>
</html>