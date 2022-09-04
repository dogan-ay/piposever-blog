<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BlogPOst;
use Illuminate\Support\Str;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = BlogPost::orderBy('created_at','ASC')->get();
        return view('back.articles.index', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.articles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $article=new BlogPost;
        $article->title=$request->title;
        $article->category=$request->category;
        $article->body=$request->content;
        $article->click = 0;

        if ($request->hasFile('image')) {
           $imgName = Str::slug($request->title).'.'.$request->image->getClientOriginalExtension();
           $request->image->move(public_path('images'),$imgName);
           $article->image = 'images/'.$imgName;
        }

        $article->save();
        
        toastr()->success('Başarılı', 'Blog İçeriği Oluşturuldu');
        return redirect()->route('admin.makaleler.index');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $article=BlogPost::findOrFail($id);
        return view('back.articles.update', compact('article'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $article=BlogPost::findOrFail($id);
        $article->title=$request->title;
        $article->category=$request->category;
        $article->body=$request->content;
        $article->save();
        
        toastr()->success('Başarılı', 'Blog İçeriği Güncellendi');
        return redirect()->route('admin.makaleler.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function delete($id)
    {
        BlogPost::find($id)->delete();
        toastr()->success('içerik Başarıyla Silindi');
        return redirect()->route('admin.makaleler.index');
        
        return $id;
    }

    public function destroy($id)
    {
        //
    }
}
