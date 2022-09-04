<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;
use Illuminate\Http\Request;
use App\Http\Livewire\Pagination;
class BlogPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $posts = BlogPost::orderBy("created_at","desc")->paginate(3);
        
        return view('index'
    );
    }


    /*categories*/

    public function category($category)
    {
        //
        $postCount = BlogPost::where('category',$category)->count();
        
      //  return view('blog.category', [
      //      'categoryName' => $category,
      //  ]
    //);
        //$postCount = $posts->count();
       /* if ($category == "kategori1") {
            return view('blog.category', compact('category','postCount'));

        }*/
        return view('blog.category', compact('category','postCount'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newPost = BlogPost::create([
            'title' => $request->title,
            'body' => $request->body,
            'user_id' => 1
        ]);

        return redirect('blog/' . $newPost->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BlogPost  $blogPost
     * @return \Illuminate\Http\Response
     */
    public function show(BlogPost $blogPost)
    {
        // 
        $blogPost->click = $blogPost->click + 1;
        $blogPost->save();
        
        return view('blog.show', [
            'post' => $blogPost,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BlogPost  $blogPost
     * @return \Illuminate\Http\Response
     */
    public function edit(BlogPost $blogPost)
    {
        //
        return view("blog.edit", [
            'post' => $blogPost,
            ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BlogPost  $blogPost
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BlogPost $blogPost)
    {
        //
        $blogPost->update([
            'title' => $request->title,
            'body' => $request->body
        ]);

        return redirect('blog/' . $blogPost->id);
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BlogPost  $blogPost
     * @return \Illuminate\Http\Response
     */
    public function destroy(BlogPost $blogPost)
    {
        //
        $blogPost->delete();

        return redirect('/blog');
    }
}
