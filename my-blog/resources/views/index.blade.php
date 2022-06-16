@extends('layouts.master')
@section('title','Piposever')
   
@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="scrolling-pagination">

                    @foreach($posts as $post)
                    <div class="post">
                        <div class="icerik">
                            <h3 x-data="{url: '/blog/{{$post->id}}'}" @click="location.replace(url)"
                            ><strong>{{$post->title}}</strong></h3>
                            @php
                            $postPassage = substr($post->body, strpos($post->body,'>')+1);
                            @endphp
                            <p x-data="{url: '/blog/{{$post->id}}'}" @click="location.replace(url)"
                            >{{ Str::limit ($postPassage,200)}}</p>
                            <div class="postDetails">
                                @php
                                \Carbon\Carbon::setLocale('tr');
                                @endphp
                                <p>{{ \Carbon\Carbon::parse($post->created_at)->translatedFormat('F jS') }}</p>
                                <strong>·</strong>
                                <p> {{Str::readDuration($post->body). ' dk. okuma'}}</p>
                                <strong>·</strong>
                                <div><a href="/category/{{$post->category}}" id='pCategory'>{{$post->category}}</a></div>
                            </div>
                        </div>
                        <div class="postImg"><img src="{{asset('test.jpg')}}" alt=""
                            x-data="{url: '/blog/{{$post->id}}'}" @click="location.replace(url)"></div>
                    </div>
                    @endforeach
                    {{ $posts->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection