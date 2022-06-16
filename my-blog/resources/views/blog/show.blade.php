@extends('layouts.master')
@section('title',$post->title)
   
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm">
                <div class="article">
                    <div class="row my-4">
                        <div class="col-sm">
                            <div><h1><strong>{{ ucfirst($post->title) }}</strong></h1></div>

                        </div>
                        <div class="col-sm">
                            <div class="articleDetails">
                                @php
                                \Carbon\Carbon::setLocale('tr');
                                @endphp
                                <p>{{ \Carbon\Carbon::parse($post->created_at)->translatedFormat('F jS') }}</p>
                                <p><strong>·</strong></p>
                                <p> {{Str::readDuration($post->body). ' dk. okuma'}}</p>
                                <p><strong>·</strong></p>
                                <div><p><a href="/category/{{$post->category}}" id='pCategory'>{{$post->category}}</a></p></div>
                            </div>
                        </div>
                    </div>

                        
                    <p>{!! $post->body !!}</p> 
                    <br>
                    <hr>
                <div id="disqus_thread"></div>
                    <script>
                        /**
                        *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
                        *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables    */
                        
                        var disqus_config = function () {
                        this.page.url = '{{ url()->current() }}';
                        this.page.identifier = '{{ request()->path() }}'
                        };
                        
                        (function() { // DON'T EDIT BELOW THIS LINE
                        var d = document, s = d.createElement('script');
                        s.src = 'https://piposever.disqus.com/embed.js';
                        s.setAttribute('data-timestamp', +new Date());
                        (d.head || d.body).appendChild(s);
                        })();
                    </script>
                    <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
                </div>
                
            </div>
        </div>
    </div>
@endsection