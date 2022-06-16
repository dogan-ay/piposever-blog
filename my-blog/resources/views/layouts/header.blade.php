<!DOCTYPE html>
<html lang="en">
    <head>
        
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title','Piposever')</title>
        <link rel='stylesheet' type='text/css' href="{{asset('style.css');}}">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;500;700;900&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">    </head>
        <link href="https://fonts.googleapis.com/css2?family=Martel+Sans&display=swap" rel="stylesheet">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jscroll/2.4.1/jquery.jscroll.min.js"></script>
        
    <body>
        <header>
        <div class="header-container">
            <img class="img-fluid" src="{{asset('piposeverv3.png');}}" alt="">
            <nav>
                <div class="navigation">
                    <ul class="list-unstyled d-flex justify-content-center">
                        <li class="mx-1" ><div class="px-1"><a href="/" class="navig-item nav-link text-decoration-none text-light">ANASAYFA</a></div></li>
                        <li class="mx-1"><div 
                            x-data="{ showDropdown: false }"
                            class="px-1">
                            <a 
                                @mouseover="showDropdown = true"
                                @mouseleave="showDropdown = false"
                                href="" class="navig-item navMenu nav-link text-decoration-none text-light">
                                KATEGORİLER
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#7FC5DC" class="bi bi-chevron-down" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
                                    </svg>
                                </span>
                            
                            </a>
                            <div
                            x-show="showDropdown"
                            @mouseover="showDropdown = true"
                            @mouseleave="showDropdown = false"
                            class="dropdownMenu">
                                <ul>
                                    @foreach($categories as $category)
                                    <li><a href="/category/{{$category->category}}">{{$category->category}}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div></li>
                        <li class="mx-1"><div class="px-1"><a href="" class="navig-item nav-link text-decoration-none text-light">İLETİŞİM</a></div></li>
                        
                    </ul>
                </div>
            </nav>
        </div>
        </header>
        
    


   
    