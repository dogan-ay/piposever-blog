<div id="firstWrapper">
                <div id="firstCard">
                    <div class="firstCon">                          
                        <p>Son Blog İçeriği</p>
                        <h3>{{$post->title}}</h3>
                        <p>{{$post->body}}</p>                              
                    </div>
                    <div class="firstImg">
                            <div class="">
                                <img src="{{asset($post->image)}}">
                            </div>
                    </div>
                </div>
            </div>
