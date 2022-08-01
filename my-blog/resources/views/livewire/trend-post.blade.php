<div>
    <div class="postUp"><div><p>Öne Çıkan Yazılar</p></div></div>
@foreach($posts as $post)
                    <div class="post">
                        <div class="icerik"
                        x-date
                        x-init="titleLine($el)"
                        > 
                            <h2 class="titleMnp" x-data="{url: '/blog/{{$post->id}}'}" @click="location.replace(url)"
                            
                            ><strong>{{$post->title}}</strong></h2>
                            @php
                            $postPassage = substr($post->body, strpos($post->body,'>')+1);
                            @endphp
                            <p x-data="{url: '/blog/{{$post->id}}'}" @click="location.replace(url)"
                            >{{ Str::limit ($postPassage,470)}}</p>
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
</div>
