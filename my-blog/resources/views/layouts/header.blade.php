<!DOCTYPE html>
<html lang="en">
    <head>
        
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        

        <title>@yield('title','Piposever')</title>
        <link rel='stylesheet' type='text/css' href="{{asset('css/style.css');}}">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;500;700;900&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">    </head>
        <link href="https://fonts.googleapis.com/css2?family=Martel+Sans&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Port+Lligat+Sans&display=swap" rel="stylesheet">

        <link href="https://fonts.googleapis.com/css2?family=Voces&display=swap" rel="stylesheet">
        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jscroll/2.4.1/jquery.jscroll.min.js"></script>
        @livewireStyles

    </head>   

    <body style="background-color: #fbf0df;">
    <!--
        
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
                                @click="showDropdown = !showDropdown"

                                href="#" class="navig-item navMenu nav-link text-decoration-none text-light">
                                KATEGORİLER
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#7FC5DC" class="bi bi-chevron-down" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
                                    </svg>
                                </span>
                            
                            </a>
                            <div
                            x-show="showDropdown"
                           
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
        </header>-->
        
        <header>
            <nav>
                <div class="navRow">
                                <div id="kategoriButon">
                                    
                                    <div id="kategoriMenuSvg">
                                        <a onclick="menuShow()">
                                            <span >
                                                <svg fill="#fbf0df" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 30 30"><path d="M 3 7 A 1.0001 1.0001 0 1 0 3 9 L 27 9 A 1.0001 1.0001 0 1 0 27 7 L 3 7 z M 3 14 A 1.0001 1.0001 0 1 0 3 16 L 27 16 A 1.0001 1.0001 0 1 0 27 14 L 3 14 z M 3 21 A 1.0001 1.0001 0 1 0 3 23 L 27 23 A 1.0001 1.0001 0 1 0 27 21 L 3 21 z"/></svg>
                                            </span>
                                        </a>
                                    </div>                                     
                                </div>  

                    <div class="navLogo">                            
                        </div>
                        <div id="logoText">
                            <img src="{{asset('piposever1.svg')}}" alt="">
                        </div>

                    
                    </div>
                                                                                                                                                                                             
                </div>
                <div id="overlay" class="" onclick="closeMenu()"></div>

                <div id="categoryMenu" class="">
                   <div id="menuContainer">
                        <div id="pipeLover">
                                <h3>piposever</h3>
                                <svg onclick="closeMenu()" xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                                    <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                                </svg>

                            </div>
                            <div id="menuSvg">
                                <img src="{{asset('smoker (2).svg')}}" alt="">
                            </div>
                            <div id="menuText">
                                <i>Bu bir pipo değilse nedir?</i>
                            </div>
                            <div class="categoryMenuList">
                                <div class="categoryRow">
                                    <div class="pngContainer">
                                        <img src="{{asset('pipeicon.png')}}" alt="">
                                    </div>
                                    <a href="">Pipo</a>
                                </div>
                                <div class="categoryRow">
                                    <div class="iconContainer">
                                        <img src="{{asset('coffeeicon.svg')}}" alt="">
                                    </div>
                                    <a href="">Kahve</a>
                                </div>
                                <div class="categoryRow">
                                    <div class="iconContainer">
                                        <img src="{{asset('teaicon.svg')}}" alt="">
                                    </div>
                                    <a href="">Çay</a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </header>
        
    


   
    