<div>
    <div class="postUp"><div><p>Öne Çıkan Yazılar</p></div></div>
    <div id="trendContainer">
        <div id="trendFirstContainer">
            <div id="trendFirstImg">
                <img src="{{asset($posts[0]->image)}}" alt="">
            </div>
            <div id="trendFirstText">
                
                <h3>{{$posts[0]->title}}</h3>
                <p>{{ Str::limit ($posts[0]->body,300)}}</p></p>
                <div id="trendFirstRow">
                    <div class="trendIconContainer ic1">
                        <img src="{{asset('pipeicon.png')}}" alt="">
                    </div>
                    <div id="firstCategoryName">
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
                    <img src="{{asset($posts[1]->image)}}" alt="">
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
                    <img src="{{asset($posts[2]->image)}}" alt="">
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
                    <img src="{{asset($posts[3]->image)}}" alt="">
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
