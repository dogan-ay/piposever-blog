<?php

namespace App\Http\Livewire;
use App\Models\BlogPost;
use Illuminate\Http\Request;
use Livewire\Component;

class TrendPost extends Component
{
    public function render() 
    {
        $posts = BlogPost::orderBy("created_at","desc")->take(3)->get();

        return view('livewire.trend-post', compact('posts'));
    }
}
