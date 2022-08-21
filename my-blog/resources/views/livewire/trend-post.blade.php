<div>
    <div class="postUp"><div><p>Öne Çıkan Yazılar</p></div></div><!--
@foreach($posts as $post) 
                    <div class="post">
                        <div class="icerik"
                        x-date
                        x-init="titleLine($el)"
                        > 
                            <h2 class="titleMnp" x-data="{url: '/blog/{{$post->id}}'}" @click="location.replace(url)"
                            
                            ><strong>{{$post->title}}</strong></h2>
                            
                            <p x-data="{url: '/blog/{{$post->id}}'}" @click="location.replace(url)"
                            >{{ Str::limit ($post->body,470)}}</p>
                            <div class="postDetails">
                                @php
                                \Carbon\Carbon::setLocale('tr');
                                @endphp
                                <p>{{ \Carbon\Carbon::parse($post->created_at)->translatedFormat('jS F') }}</p>
                                <strong>·</strong>
                                <p> {{Str::readDuration($post->body). ' dk. okuma'}}</p>
                                <strong>·</strong>
                                <div><a href="/category/{{$post->category}}">{{$post->category}}</a></div>
                            </div>
                        </div>
                        <div class="postImg"><img src="{{asset('test.jpg')}}" alt=""
                            x-data="{url: '/blog/{{$post->id}}'}" @click="location.replace(url)"></div>
                    </div>
                    @endforeach
-->
    <div id="trendContainer">
        <div id="trendFirstContainer">
            <div id="trendFirstImg">
                <img src="{{asset('test.jpg')}}" alt="">
            </div>
            <div id="trendFirstText">
                <h3>Lorem ipsum dolor sit. </h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit atque beatae dicta. Ea accusantium omnis necessitatibus perspiciatis sint, eaque debitis.</p>
            </div>
        </div>
        <div id="trendSecondContainer">
            <div class="trendMiniPost">

            </div>
            <div class="trendMiniPost">
                
            </div>
            <div class="trendMiniPost">
                
            </div>
        </div>
    </div>
</div>
