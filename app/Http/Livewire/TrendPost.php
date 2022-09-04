<?php

namespace App\Http\Livewire;
use App\Models\BlogPost;
use Illuminate\Http\Request;
use Livewire\Component;

class TrendPost extends Component
{
    public function render() 
    {
        $pipeTrend = BlogPost::where('category',"Pipo")->orderBy('click', 'DESC')->first();
        $tobaccoTrend = BlogPost::where('category',"Tütün")->orderBy('click', 'DESC')->first();
        $pipeLoverTrend = BlogPost::where('category',"Piposeverler")->orderBy('click', 'DESC')->first();
        $commentsTrend = BlogPost::where('category',"Yorumlar")->orderBy('click', 'DESC')->first();

        $posts = [];
        array_push(
            $posts,
            $pipeTrend,
            $tobaccoTrend,
            $pipeLoverTrend,
            $commentsTrend    
        );
        $posts = collect($posts);
        return view('livewire.trend-post', compact('posts'));
    }
}
