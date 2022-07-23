@extends('layouts.master')
@section('title','Piposever')
   
@section('content')
    <main>
            <div id="firstWrapper">
                    <div class="firstCon">
                        <div class="firstPost">
                            <div class="firstContent">
                                <p>Son Blog İçeriği</p>
                                <h3>Lorem lorem- lorem </h3>
                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Esse, libero.
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat in corporis minima debitis. Ratione ab inventore molestiae officia, sint modi!
                                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Deserunt maiores quaerat quia modi repudiandae voluptatem distinctio reprehenderit molestiae nam neque.
                                </p>
                            </div>
                        </div>
                        <div class="firstImg">
                            <div class="">
                                <img src="{{asset('test.jpg')}}">
                            </div>
                        </div>
                    </div>
            </div>
            <livewire:trend-post /> 

            <livewire:pagination /> 


    </main>     
</div>
@endsection