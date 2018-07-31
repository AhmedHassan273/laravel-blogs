<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>My Blog | Share With the World</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="/css/app.css">
    </head>
    <body>
        <header>

            @include('layouts.nav')

        </header>
        
        
        <div class="container">
            @if($flash = session('registerMessage'))
                <div id="flash-register" class="flash alert alert-success" role="alert">
                    {{$flash}}
                </div>
            @endif

            @if($flash = session('publishMessage'))
                <div id="flash-publish" class="flash alert alert-success" role="alert">
                    {{$flash}}
                </div>
            @endif

            @yield('content')

        </div>

        <footer class="py-5 bg-dark">

            @include('layouts.footer')

        </footer>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js"></script>
        <script>
            $(document).ready(()=>{
                function fade(id) {

                    return $(id).delay(2000).fadeOut(2000);
                }
                
                fade('#flash-register');
                fade('#flash-publish');
            });
        </script>
    </body>
</html>