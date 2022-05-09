@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-12 pt-2">
                 <div class="row">
                    <div class="col-8">
              <!---     <h1 class="display-one">Our Blog!</h1> 
                        <p>Enjoy reading our posts. Click on a post to read!</p>
                    </div>
                    <div class="col-4">
                        <p>Create new Post</p>
                        <a href="/blog/create/post" class="btn btn-primary btn-sm">Add Post</a>
                    </div>
                </div>   --->
                            
                    @forelse($posts as $post)
            <div class="container">     
                    <div class="b">
                        <ul>
                            <div class="blog-title"><li><a id="bloglink" href="./blog/{{ $post->id }}">{{ ucfirst($post->title) }}</a> <br> 
                            </div>
                            <p id="blog-body">{{ Str::limit ($post->body,100)}}</p></li>
                        </ul>
            </div>    
                    </div>
                    @empty
                    <p class="text-warning">No blog Posts available</p>
                    @endforelse
                    
                </div>
                
            </div>
        </div>
      
    </div>
    {{$posts->links()}}
@endsection