<!DOCTYPE html>
<html lang="en">
    <head>
        
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name') }}</title>
        <link rel='stylesheet' type='text/css' href="{{asset('style.css');}}">
        <link rel="stylesheet" href="{{asset('https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css');}}" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">



    </head>

    <body>
        <header>
        <div class="banner">
            
            <img class="banner" src="{{asset('piposeverv3.png');}}" alt="">
            
        </div>
        </header>
        
    <nav class='nav'>
    
   <!--     <hr class='nav-hr'>-->
     
            <div class="nav-con"> 
                
                     
                <ul>           
                    <li><div class="dropdown"><a href="a">Kategoriler</a></div></li>
                    <li><a href="a">Anasayfa</a></li>
                    
                    <li><a href="a">Hakkımda</a></li>
                    <li><a href="a">İletişim</a></li>
                    
                </ul>
            </div>
        <!--<hr class='nav-hr'>-->
    </nav>

    @yield('content')
   
    </body>
    
</html>