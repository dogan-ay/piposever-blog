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
                
                <h3>{{$posts[0]->title}}</h3>
                <p>{{ Str::limit ($posts[0]->body,300)}}</p></p>
                <div id="trendFirstRow">
                    <div class="trendIconContainer ic1">
                        <img src="{{asset('pipeicon.png')}}" alt="">
                    </div>
                    <div>
                        <a href="">{{$posts[0]->category}}</a>
                    </div>
                    <div id="trendFirstButton">
                        <a href="">okumaya devam et</a>
                    </div>
                    <div>
                    <p> {{Str::readDuration($posts[0]->body). ' dk. okuma'}}</p>
                    </div>
                </div>
            </div>
        </div>
        <div id="trendSecondContainer">
            <div class="trendMiniPost">
                <div class="trendMiniImg">
                    <img src="{{asset('test.jpg')}}" alt="">
                </div>
                <div class="trendMiniContent">
                    <h3>{{$posts[1]->title}}</h3>
                    <div class="trendMiniDetails">
                        <div class="miniA1 ic2">
                            <img src="{{asset('categoryicon2.png')}}" alt="">
                        </div>
                        <p> {{Str::readDuration($posts[1]->body). ' dk. okuma'}}</p>
                    </div>
                </div>
            </div>
            <div class="trendMiniPost">
                <div class="trendMiniImg">
                    <img src="{{asset('test.jpg')}}" alt="">
                </div>
                <div class="trendMiniContent">
                    <h3>{{$posts[2]->title}}</h3>
                    <div class="trendMiniDetails">
                        <div class="trendIconMini ic3">
                            <img src="{{asset('categoryicon3.png')}}" alt="">
                        </div>
                        <p> {{Str::readDuration($posts[2]->body). ' dk. okuma'}}</p>
                    </div>
                </div>
            </div>
            <div class="trendMiniPost">
                <div class="trendMiniImg">
                    <img src="{{asset('test.jpg')}}" alt="">
                </div>
                <div class="trendMiniContent">
                    <h3>{{$posts[3]->title}}</h3>
                    <div class="trendMiniDetails">
                        <div class="trendIconMini ic4">
                            <img src="{{asset('categoryicon4.png')}}" alt="">
                        </div>
                        <p> {{Str::readDuration($posts[3]->body). ' dk. okuma'}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
